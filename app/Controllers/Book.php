<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Books;
use CodeIgniter\Model;

class Book extends BaseController
{
    protected $helpers = ['url', 'form', 'text', 'html'];

    public function index() {
        $book = new Books();
        $data['books'] = $book->findAll();
        return view('index', $data);
    }

    public function add() {
        return view('add');
    }

    public function addBooks() {
        $book = new Books();

        $bookInsert = array(
            'book_title'  => $this->request->getPost('title'),
            'book_description'  => $this->request->getPost('description'),
            'book_author'  => $this->request->getPost('author'),
            'book_released'  => $this->request->getPost('released'),
            'book_price'  => $this->request->getPost('price')
        );
        $book->insert($bookInsert);

        return redirect()->to('/')->with('success', "Book added successfully");
    }

    public function editBooks($book_id = null) {
        $book = new Books();
        $data['books'] = $book->find($book_id);

        return view('edit', $data);
    }

    public function updateBooks($book_id = null) {
        $book = new Books();
        $bookUpdate = array(
            'book_title'  => $this->request->getPost('title'),
            'book_description'  => $this->request->getPost('description'),
            'book_author'  => $this->request->getPost('author'),
            'book_released'  => $this->request->getPost('released'),
            'book_price'  => $this->request->getPost('price')
        );
        $book->update($book_id, $bookUpdate);

        return redirect()->to('/')->with('success', "Book updated successfully");
    }

    public function deleteBooks($book_id = null) {
        $book = new Books();
        $book->where('book_id', $book_id)->first();
        $book->delete($book_id);

        return redirect()->to('/')->with('success', "Book deleted successfully");
    }
}
