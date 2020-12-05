<?php 

$title = 'Index';
require_once 'header.php';

?>
<button class="btn" id="bbb">123</button>

<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="#">About</a>
  <a href="#">Services</a>
  <a href="#">Clients</a>
  <a href="#">Contact</a>
</div>
<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; open</span>
<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
</script>
    <!-- <div class="dropdown">
        <button>Button</button>
        <div>
            <a href="#">RazDva</a>
            <a href="#">RazDva</a>
            <a href="#">RazDva</a>
            <a href="#">RazDva</a>
            <a href="#">RazDva</a>
        </div>
    </div> -->

    
     <!-- <div>
        <ul class="VerticalMenu">
            <li><a href="" class="activeItem">112312</a></li>
            <li><a href="">212312</a></li>
            <li><a href="">3sdafsd</a></li>
            <li><a href="">4asdfa sd</a></li>
        </ul>
    </div> -->
    <!-- <div>
        <input type="text" class="inp">
    </div> -->

<?php require_once 'footer.php';


