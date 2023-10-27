<style>
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    .wrapper{
        display: grid;
        grid-template-columns: repeat(4, 1fr);
    }
    .usuario{
        height: 200px;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        outline: 1px solid black;
        padding: 1rem;
        gap: 1rem;
    }
    #input{
        display: none;
    }

    form{
        width: 100%;
        min-height: 100vh;
        display: none;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        position: absolute;
        top: 0;
        left: 0;
        background-color: #00000066;
    }
    form.active{
        display: flex;
    }
    body{
        position: relative;
        width: 100%;
    }
</style>
<?php
    require('../../src/php/conexao.php');

    try{
        $sql = "select idTESTE, nm_teste, cd_senha from tb_teste";
        $query = $pdo->prepare($sql);
        $query -> execute();
        
        $resultados = $query->fetchAll(PDO::FETCH_ASSOC);
        echo "<div class=wrapper>";
        foreach($resultados as $campos){
            // echo "<p>".$campos['idTESTE']." ".$campos['nm_teste']." ".$campos['cd_senha']." <button value=".$campos['idTESTE']."></button></p>";
            echo "<div class=usuario>";
            echo "<p>".$campos['idTESTE']."</p>";
            echo "<p>".$campos['nm_teste']."</p>";
            echo "<p>".$campos['cd_senha']."</p>";
            echo "<button value=".$campos['idTESTE']." id=btnDeletar> Deletar </button>";
            echo "</div>";
        }
        echo "</div>";
    }
    catch(PDOException $e){
        echo $e->getMessage();
    }

?>
<body>
    <form action="deleteScript.php" method="post">
        <input type="text" name="id" id="input">
        <p>Deseja Excluir?</p>
        <button type="submit" id="btnSim">Sim</button>
        <button type="reset" id="btnNao">Não</button>
    </form>
</body>
<script>
    const buttons = document.querySelectorAll("#btnDeletar");
    const input = document.getElementById("input")
    const form = document.querySelector("form")
    const btnNao = document.getElementById("btnNao");
    buttons.forEach(btn =>{
        btn.addEventListener("click", ()=>{
            input.value = btn.value;
            openModal();
        })
    })

    btnNao.addEventListener("click", openModal)

    function openModal(){
        if(form.classList.contains("active")){
            form.classList.remove("active")
        } else{
            form.classList.add("active");
        }
    }
</script>