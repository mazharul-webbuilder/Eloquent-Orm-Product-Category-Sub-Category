<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SubCategoryController;

Route :: get('/' , [CategoryController::class, 'index'] )->name('home');

Route:: get('/add-category', [CategoryController::class, 'add'])->name('category.add');

Route:: post('/create-category', [CategoryController::class, 'create'])->name('category.create');

Route:: get('/manage-category', [CategoryController::class, 'manage'])->name('category.manage');

Route:: get('/edit-category/{id}', [CategoryController::class, 'edit'])->name('category.edit');

Route:: post('/update-category/{id}', [CategoryController::class, 'update'])->name('category.update');

Route:: post('/delete-category/{id}', [CategoryController::class, 'delete'])->name('category.delete');




Route:: get('/add-sub-category', [SubCategoryController::class, 'add'])->name('sub_category.add');

Route:: post('/create-sub-category', [SubCategoryController::class, 'create'])->name('sub_category.create');

Route:: get('/manage-sub-category', [SubCategoryController::class, 'manage'])->name('sub_category.manage');

Route:: get('/edit-sub-category/{id}', [SubCategoryController::class, 'edit'])->name('sub_category.edit');

Route:: post('/update-sub-category/{id}', [SubCategoryController::class, 'update'])->name('sub_category.update');

Route:: post('/delete-sub-category/{id}', [SubCategoryController::class, 'delete'])->name('sub_category.delete');



