<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

const express = require('express');
const app = express();
const PORT = 3000;

// GET route
app.get('/api/products', (req, res) => {
  res.send('GET request received: List of products');
});

// POST route
app.post('/api/products', (req, res) => {
  res.send('POST request received: Create a new product');
});

// PUT route
app.put('/api/products/:id', (req, res) => {
  const productId = req.params.id;
  res.send(`PUT request received: Update product with ID ${productId}`);
});

// PATCH route
app.patch('/api/products/:id', (req, res) => {
  const productId = req.params.id;
  res.send(`PATCH request received: Partially update product with ID ${productId}`);
});

// DELETE route
app.delete('/api/products/:id', (req, res) => {
  const productId = req.params.id;
  res.send(`DELETE request received: Delete product with ID ${productId}`);
});

app.listen(PORT, () => {
  console.log(`Server is running on port ${PORT}`);
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
