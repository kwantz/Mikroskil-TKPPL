# Ini adalah Repository untuk Tugas Akhir TKPPL
### Form Submit Nama :

*__Sebelumnya:__*
```html
<form class="form-horizontal" id="userData">
    <div class="form-group">
        <label class="control-label col-sm-3" for="username">username:</label>
        <div class="col-sm-9">
            <input type="text" class="form-control" id="username" placeholder="Enter username" name="username">
        </div>
    </div>
    <div class="form-group">
        <a href="story.html" class="btn btn-success" id="submit">
            Submit
        </a>
    </div>
</form>
```

*__Sesudahnya:__*
```html
<form class="form-horizontal" id="userData" action="api/users.php" method="POST">
    <div class="form-group">
        <label class="control-label col-sm-3" for="username">username:</label>
        <div class="col-sm-9">
            <input type="text" class="form-control" id="username" placeholder="Enter username" name="namaUser">
        </div>
    </div>
    <div class="form-group">
        <button name="submit" class="btn btn-success" id="submit">Submit</button>
    </div>
</form>
```

*__Yang Harus Diganti:__*
```html
<form class="form-horizontal" id="userData">
<form class="form-horizontal" id="userData" action="api/users.php" method="POST">

<input type="text" class="form-control" id="username" placeholder="Enter username" name="username">
<input type="text" class="form-control" id="username" placeholder="Enter username" name="namaUser">

<a href="story.html" class="btn btn-success" id="submit">Submit</a>
<button name="submit" class="btn btn-success" id="submit">Submit</button>
```

ongoing...