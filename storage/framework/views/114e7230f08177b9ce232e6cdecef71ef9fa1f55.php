<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Home</title>
</head>
<body>
    
    <nav>
        <div class="nav-wrapper">
          <a href="#" class="brand-logo">Logo</a>
          <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
          <ul class="right hide-on-med-and-down">
            <li><a href="#">Home</a></li>
            <li><a href="#">About</a></li>
            <li>
              <form method="GET" action="<?php echo e(route('search')); ?>">
                <div class="input-field">
                  <input type="text" name="query" id="search" placeholder="Search...">
                  <label for="search"><i class="material-icons">search</i></label>
                  <button type="submit" class="btn btn-floating btn-large waves-effect waves-light red"><i class="material-icons">search</i></button>
                </div>
              </form>
            </li>
          </ul>
        </div>
      </nav>
      
    
        <?php echo $__env->yieldContent('content'); ?>  
  
</body>
</html><?php /**PATH C:\xampp\htdocs\lmns\lime\resources\views/app.blade.php ENDPATH**/ ?>