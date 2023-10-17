<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro materia</title>
    <link rel="stylesheet" href="./static/css/normalizer.css">
    <link rel="stylesheet" href="./static/css/style.css">
    <link rel="stylesheet" href="./static/css/register.css">
</head>

<body>
    <header>
        <h1>MSSM</h1>
        <nav>
            <ul>
                <li>
                    <a href="./template/main.html">inicio</a>
                </li>
                <li>
                    <a href="./template/register.html">registrar materia</a>
                </li>
                <li>
                    <a href="./template/view.html">ver materias</a>
                </li>
            </ul>
        </nav>
    </header>

    <aside>
        <img src="./static/img/usuario.png" alt="usuario">
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
    </aside>
    <main>
        <article>
            
            <?php
            $servername = "localhost";
            $username = "root";
            $password = "sergiomolla160";
            $dbname = "escuela";

            $conn = new mysqli($servername, $username, $password, $dbname);

            if ($conn->connect_error) {
                die("Error de conexión: " . $conn->connect_error);
            }

            $matricula = $_GET['matricula'];
            $materia = $_GET['materia'];
            $where = " WHERE ";
            $not_in_where = true;
            if (!$matricula == 0){
                $where .= " matricula LIKE '%$matricula%'  ";
                $not_in_where = false;
            }
            if (!$materia == ''){
                if (!$not_in_where){
                    $not_in_where = true;
                    $where .=' AND ';
                }
                $where .= " materia LIKE '%$materia%' ;";
                
            }else{
                $where .= ';';
            }
            if ($not_in_where){
                $where = " ; ";
            }
            
            $sql = "SELECT * FROM `datos` $where ";
            
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    $matricula  = $row['matricula'];
                    $materia    = $row['materia'];
                    echo "<section class='item_card'><img src='./static/img/usuario-de-pizarra.png' alt='icon card' class='item_card__icon'><h5 class='item_card__profesor'>$materia</h5><hr><div><h3 class='item_card__matricula'>$matricula</h3><button class='item_card__button'>copy</button></div></section>";
                }

            } else {
                echo "0 resultados";
            }

            $conn->close();
            ?>

        </article>
        <style>

            article {
                display: grid;
                grid-template-columns: repeat(auto-fit, minmax(60px,1fr));
                grid-template-columns: repeat(auto-fit, minmax(min(100%,80px),1fr));
                grid-auto-rows: min(100%,150px);
                gap: 10%;
                padding: 5%;
                overflow: hidden;
                overflow-y: auto;
            }
            .item_card{
                width: 100%;
                min-height:100%;
                height: 100%;
                display: flex;
                border: 2px solid #0000000d;
                padding: 5%;
                gap: 5%;
                justify-content: space-between;
                align-items: center;
                flex-direction: column;
                font-size: 0.5rem;
            }
            
            .item_card hr{
                width: 100%;
            }
            .item_card__icon {
                width: 50%;
                height: auto;
            }
            .item_card div{
                text-align: center;
                display: flex;
                width: 100%;
                flex-direction: column;
            }
            .item_card__button{
                cursor: pointer;
                background-color: #CD5C08;
                color: aliceblue;
                border: 0.3vw inset #00000092;
                transition: 0.3s;
            }
            .item_card__button:hover{
                background-color: #ec751a;
            }
            .item_card__button:active{
                transition: 0s;
                background-color: #95c9fd;
                border-style: outset;
            }
            .item_card__matricula{
                font-size: 0.8rem;
                padding: 5%;
                white-space: nowrap;
                overflow: hidden;
                text-overflow: ellipsis;
                max-width: 100%;
                transition: 0.3s;
            }
            .item_card__profesor{
                position: relative;
                text-align:center;
                font-size:1rem;
                width: 100%;
                height: 100%;
                white-space: nowrap;
                overflow:hidden;
                text-overflow:ellipsis;
                transition:0.3s;
                
            }
            .item_card__matricula:hover,.item_card__profesor:hover{
                text-shadow: 0 0 5px #00000092;
                background-color:#f9fcff;
                transform: scale(1.4);
                overflow: visible;

            }

        </style>

    </main>

    <script>
        const dots = document.getElementsByClassName('dot');
        for (let dot of dots) {
            dot.addEventListener('click', () => {
                alert("esto aun no hacer nada <3")
            });
        }

        document.addEventListener('DOMContentLoaded', () => {
            const items_card = document.getElementsByClassName('item_card');
            for (const item of items_card) {
                const matricula = item.getElementsByClassName('item_card__matricula')[0].textContent;
                const button =  item.getElementsByClassName('item_card__button')[0];
                button.addEventListener('click',()=>{
                    navigator.clipboard.writeText(`${matricula}`)
                    .catch(err => console.error(`Error copying text ${matricula} to clipboard:`, err));
                });
            }
        });
    </script>
</body>

</html>