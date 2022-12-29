<nav class="nav">

<div class="logo">
  
<p>call of duty mobile</p>
  

</div>
<ul>
  <li><a href="Home.php">Home</a></li>
  <li><a href="About.php">News</a></li>
  <li><a href="Contact.php">Contact</a></li>
  <li><a href="Shop.php">Shop</a></li>
  
</ul>



</nav>
<script>
  // enable hidden nav bar----
  {
    const nav = document.querySelector(".nav");
    let lastscrolly = window.scrollY;

    window.addEventListener("scroll",() =>{
      if (lastscrolly < window.scrollY){
      nav.classList.add("nav--hidden");
      }else{
        nav.classList.remove("nav--hidden");
        

      }

      lastscrolly = window.scrollY;

    });
}
</script>
