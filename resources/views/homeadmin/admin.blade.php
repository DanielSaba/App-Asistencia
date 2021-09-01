

<div class="" >
    <nav id="nav">
        <div id="logo">HOME</div>
        <label for="drop" class="toggle">Menu Administrador</label>
        <input type="checkbox" id="drop" />
            <ul class="menu">
                <li>
                    <!-- First Tier Drop Down -->
                    <label for="drop-1" class="toggle">+</label>
                    <a href="#">Usuarios </a>
                        <ul>
                            <li><a href="/usuarios/create">Registrar</a></li>
                            <li><a href="/usuarios">Listar</a></li>
                        </ul> 
                </li>
                <li>
                    <!-- First Tier Drop Down -->
                    <label for="drop-1" class="toggle">+</label>
                    <a href="#">Trabajadores </a>
                        <ul>
                            <li><a href="/trabajador/create">Registrar</a></li>
                            <li><a href="/trabajador">Listar</a></li>

                        </ul> 
                </li>
                <li>
                    <!-- First Tier Drop Down -->
                    <label for="drop-1" class="toggle">+</label>
                    <a href="/marcado">Reportes </a> 
                </li>
                <li>
                    <!-- First Tier Drop Down -->
                    <label for="drop-1" class="toggle">+</label>
                    <a href="/horario">Horarios</a> 
                </li>
               
                <li>
                    <!-- First Tier Drop Down -->
                    <label for="drop-1" class="toggle">+</label>
                    <a href="#">Vacaciones </a>
                        <ul>
                            <li><a href="/vacaciones/create">Asignar</a></li>
                            <li><a href="/vacaciones">Listar</a></li>

                        </ul> 
                </li>

            </ul>
    </nav>

</div>



<style type="text/css">

    body {
    
    line-height: 32px;
    color: #ffffff;
    margin: 0;
    padding: 0;
    word-wrap:break-word !important;
    font-family: 'Open Sans', sans-serif;
    color:black;
    }

a {
    color: #FFF;
}


p {
    text-align: center;
}

.toggle,
[id^=drop] {
    display: none;
}

/* Giving a background-color to the nav container. */
#nav { 
    margin:0;
    padding: 0;
    background-color: #254441;
}

#logo {
    display: block;
    padding: 0 30px;
    float: left;
    font-size:20px;
    line-height: 60px;
}


#nav:after {
    content:"";
    display:table;
    clear:both;
}

/* Removing padding, margin and "list-style" from the "ul",
 * and adding "position:reltive" */
#nav ul {
    float: left;
    padding:0;
    margin:0;
    list-style: none;
    position: relative;
    }
    
/* Positioning the navigation items inline */
#nav ul li {
    margin: 0px;
    display:inline-block;
    float: left;
    background-color: #254441;
    }

/* Styling the links */
#nav a {
    display:block;
    padding:14px 20px;  
    color:#FFF;
    font-size:17px;
    text-decoration:none;
}


#nav ul li ul li:hover { background: white }

/* Background color change on Hover */
#nav a:hover { 
    background-color: white; 
    color:black;
}

/* Hide Dropdowns by Default
 * and giving it a position of absolute */
#nav ul ul {
    display: none;
    position: absolute; 
    /* has to be the same number as the "line-height" of "nav a" */
    top: 60px; 
}
    
/* Display Dropdowns on Hover */
#nav ul li:hover > ul {
    display:inherit;
}
    
/* Fisrt Tier Dropdown */
#nav ul ul li {
    width:170px;
    float:none;
    display:list-item;
    position: relative;
}

/* Second, Third and more Tiers 
 * We move the 2nd and 3rd etc tier dropdowns to the left
 * by the amount of the width of the first tier.
*/
#nav ul ul ul li {
    position: relative;
    top:-60px;
    /* has to be the same number as the "width" of "nav ul ul li" */ 
    left:170px; 
}

    
/* Change ' +' in order to change the Dropdown symbol */
li > a:after { content:  ' +'; }
li > a:only-child:after { content: ''; }


/* Media Queries
--------------------------------------------- */

@media all and (max-width : 768px) {

    #logo {
        display: block;
        padding: 0;
        width: 100%;
        text-align: center;
        float: none;
    }

    nav {
        margin: 0;
    }

    /* Hide the navigation menu by default */
    /* Also hide the  */
    .toggle + a,
    .menu {
        display: none;
    }

    /* Stylinf the toggle lable */
    .toggle {
        display: block;
        background-color: #254441;
        padding:14px 20px;  
        color:#FFF;
        font-size:17px;
        text-decoration:none;
        border:none;
    }

    .toggle:hover {
        background-color: #000000;
    }

    /* Display Dropdown when clicked on Parent Lable */
    [id^=drop]:checked + ul {
        display: block;
    }

    /* Change menu item's width to 100% */
    nav ul li {
        display: block;
        width: 100%;
        }

    nav ul ul .toggle,
    nav ul ul a {
        padding: 0 40px;
    }

    nav ul ul ul a {
        padding: 0 80px;
    }

    nav a:hover,
    nav ul ul ul a {
        background-color: #000000;
    }
  
    nav ul li ul li .toggle,
    nav ul ul a,
  nav ul ul ul a{
        padding:14px 20px;  
        color:#FFF;
        font-size:17px; 
    }
  
  
    nav ul li ul li .toggle,
    nav ul ul a {
        background-color: #212121; 
    }

    /* Hide Dropdowns by Default */
    nav ul ul {
        float: none;
        position:static;
        color: #ffffff;
        /* has to be the same number as the "line-height" of "nav a" */
    }
        
    /* Hide menus on hover */
    nav ul ul li:hover > ul,
    nav ul li:hover > ul {
        display: none;
    }
        
    /* Fisrt Tier Dropdown */
    nav ul ul li {
        display: block;
        width: 100%;
    }

    nav ul ul ul li {
        position: static;
        /* has to be the same number as the "width" of "nav ul ul li" */ 

    }

}

@media all and (max-width : 330px) {

    nav ul li {
        display:block;
        width: 94%;
    }

}

</style>

