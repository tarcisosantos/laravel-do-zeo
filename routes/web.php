<?php
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Site\HomeController;
use App\Http\Controllers\Site\CategoryController;
use App\Http\Controllers\Site\BlogController;
use App\Http\Controllers\Site\ContactController;
use App\Http\Controllers\Site\ArticleController;
use App\Http\Controllers\Site\TermsController;
use App\Http\Controllers\Site\PrivateController;



Route::namespace('Site')->group(function(){
    Route::get('/', [HomeController::class, 'index'])->name('site.home');
    Route::get('produtos', [CategoryController::class, 'index'])->name('site.products');
    Route::get('produtos/{slug}', [CategoryController::class, 'show'])->name('site.products.category');
    Route::get('blog', [BlogController::class, 'index'])->name('site.blog');

    Route::view('sobre', 'site.about.index')->name('site.about');

    Route::get('contato', [ContactController::class, 'index'])->name('site.contact');
    Route::post('contato', [ContactController::class, 'form'])->name('site.contact.form');

    Route::get('artigo', [ArticleController::class, 'index'])->name('site.article');
    Route::get('termos', [TermsController::class, 'index'])->name('site.terms');
    Route::get('privado', [PrivateController::class, 'index'])->name('site.private');
});

