@extends('layouts.app')
<div class="container"><br><br><br><br><br>
    <div class="row">
        <div class="col-md-12">
            <h2>Add a new Post</h2>
            <hr  style="width: 100%;">
<form action="{{route('posts')}}" method="post" enctype="multipart/form-data">
@csrf
  <div class="form-group row">
    <label for="inputTitle" class="col-sm-2 col-form-label">Title</label>
    <div class="col-sm-10">
      <input type="text" required class="form-control" name="post_title" id="inputTitle" placeholder="Enter title">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputArticle" class="col-sm-2 col-form-label">Content</label>
    <div class="col-sm-10">
    <textarea class="form-control" required name="post_article" id="inputArticle" rows="10"></textarea>
    </div>
  </div>
  <div class="form-group row">
    <label for="inputLink" class="col-sm-2 col-form-label">Video Link</label>
    <div class="col-sm-10">
    <input type="text" class="form-control" name="post_links" id="inputLink" placeholder="Enter video link">
    </div>
  </div>
  <div class="form-group row">
    <label for="uploadimage" class="col-sm-2 col-form-label">Image upload</label>
    <div class="col-sm-10">
    <input type="file" class="form-control-file" name="post_image" id="uploadimage">
    </div>
  </div> 
  <div class="form-group row">
    <label for="inputDate" class="col-sm-2 col-form-label">Date</label>
    <div class="col-sm-10">
    <input type="date" class="form-control-file" id="inputDate">
    </div>
  </div>   
  <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-success">Save</button>
    </div>
  </div>
</form>       
        </div>
    </div>
</div>
