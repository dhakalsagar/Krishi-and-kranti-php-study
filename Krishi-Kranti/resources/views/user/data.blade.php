<!DOCTYPE html>
<html lang="en">
<head>
<title>Get More</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
@include('user.css')
<style>
* {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
}

header {
  background-color: #c6e593;
  text-decoration-color: green;
  padding: 30px;
  text-align: left;
  font-size: 35px;
  color: white;
  font-family: monospace;
}

nav {
  float: left;
  width: 30%;
  height: 300px;
  padding: 20px;
}
nav ul {
  list-style-type: none;
  padding: 0;
  font-family: monospace;
}

article {
  float: left;
  padding: 20px;
  width: 70%;
  background-color: #f1f1f1;
  height: 300px;
  font-family: monospace;
}

section::after {
  content: "";
  display: table;
  clear: both;
}

@media (max-width: 600px) {
  nav, article {
    width: 100%;
    height: auto;
    font-family: monospace;
  }
}
</style>
</head>
<body>


  <header>
    <a href="redirect?page=1#[object%20Object]" class="logo">Krishi-Kranti</a>
</header>

<section>
  <nav>
    <img style="height: 100%; width: 100%;" src="assets/images/member-item-01.jpg" alt="logo" />
    <p style="text-align: center;">Sagar Dhakal</p>
  </nav>
  
  <article>
    <h1>Master Panning</h1>
    <p>A business plan is a decision making tool that takes the form of a formal document. It states your business goals, why you think you can achieve them, and lays out your plan for doing so. Farm business planning is also a process, not an end product. A business plan is a work in progress, which farm business owners or operators will want to revisit regularly. </p>
  </article>
</section>

<footer>
 @include('user.footer')
</footer>
</body>
</html>

