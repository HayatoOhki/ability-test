<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Contact;
use App\Http\Requests\ContactRequest;
use App\Http\Requests\UserRequest;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index() {
        $categories = Category::all();
        return view('index', compact('categories'));
    }
    public function confirm(ContactRequest $request) {
        $contact = $request->only(['last_name', 'first_name', 'gender', 'email', 'tell_1', 'tell_2', 'tell_3', 'address', 'building', 'category_id', 'detail']);
        $categories = Category::all();
        return view('confirm', compact('contact', 'categories'));
    }
    public function store(ContactRequest $request) {
        if ($request->input('back') == 'back') {
            return redirect('/')->withInput();
        }
        $contact = $request->only(['last_name', 'first_name', 'gender', 'email', 'tell', 'address', 'building', 'category_id', 'detail']);
        Contact::create($contact);
        return view('thanks');
    }
    public function admin() {
        return view('admin');
    }
    public function register() {
        return view('register');
    }
    public function login() {
        return view('login');
    }
}
