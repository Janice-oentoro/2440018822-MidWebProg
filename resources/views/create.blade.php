@include('header')
@extends('footer')

<h1>Insert</h1>
        <form action="/stores" method="POST" enctype="multipart/form-data">
          @csrf

<!-- Category 
            <div class="form-group">
            <label for="name">Category</label>
              <input type="text" class="form-control" name="name" id="name" placeholder="Category Name">
            </div>
-->
<!-- Publisher 
            <div class="form-group">
            <label for="name">Publisher Name</label>
              <input type="text" class="form-control" name="name" id="name" placeholder="Pub Name">
            </div>

            <div class="form-group">
              <label for="address">Address</label>
              <input type="text" class="form-control" name="address" id="address" placeholder="Address">
            </div>

            <div class="form-group">
              <label for="phone">Phone</label>
              <input type="text" class="form-control" name="phone" id="phone" placeholder="phone">
            </div>

            <div class="form-group">
              <label for="email">Email</label>
              <input type="text" class="form-control" name="email" id="email" placeholder="email">
            </div>

            <div class="form-group">
              <label for="image">Image</label>
              <input type="file" class="form-control" name="image" id="image">
            </div>
-->

<!-- Book  
            <label for="publisher_id">Publisher ID</label>
              <input type="number" class="form-control" name="publisher_id" id="publisher_id">
            </div>

            <div class="form-group">
              <label for="title">Title</label>
              <input type="text" class="form-control" name="title" id="title" placeholder="Title">
            </div>

            <div class="form-group">
              <label for="author">Author</label>
              <input type="text" class="form-control" name="author" id="author" placeholder="Author">
            </div>

            <div class="form-group">
              <label for="year">Year</label>
              <input type="number" class="form-control" name="year" id="Year">
            </div>

            <div class="form-group">
              <label for="synopsis">Synopsis</label>
              <input type="text" class="form-control" name="synopsis" id="synopsis" placeholder="Synopsis">
            </div>

            <div class="form-group">
              <label for="image">Image</label>
              <input type="file" class="form-control" name="image" id="image">
            </div>
-->           

<!--    Book Category 
            <div class="form-group">
              <label for="book_id">Book ID</label>
              <input type="number" class="form-control" name="book_id" id="book_id">
            </div>

            <div class="form-group">
              <label for="category_id">Category ID</label>
              <input type="number" class="form-control" name="category_id" id="category_id">
            </div>
--> 
            <button class="btn btn-primary">Add</button>
        </form>
    </div>

</body>
</html>
