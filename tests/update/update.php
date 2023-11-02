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
            echo "<button value=".$campos['idTESTE']." id=btnEditar> Editar </button>";
            echo "</div>";
        }
        echo "</div>";
    }
    catch(PDOException $e){
        echo $e->getMessage();
    }

?>
<body>
    <form action="./updateScript.php" method="post">
        <p id="codigoteste">Código</p>
        <input type="text" name="codigo" id="input" style="display: none;">
        <p >Nome</p>
        <input type="text" name="nome" id="input" autocomplete="off">
        <p>Senha</p>
        <input type="text" name="senha" id="input" autocomplete="off">
        <button type="submit" id="btnSim">Alterar</button>
        <button type="reset" id="btnNao">Cancelar</button>
    </form>
</body>
<script>
    const buttons = document.querySelectorAll("#btnEditar");
    const input = document.querySelectorAll("#input")
    const form = document.querySelector("form")
    const btnNao = document.getElementById("btnNao");
    const codigoTeste = document.querySelector("#codigoteste")
    buttons.forEach(btn =>{
        btn.addEventListener("click", (e)=>{
            let card = e.target.closest(".usuario")
            card.classList.add("editando")
            let paragraphs = document.querySelectorAll(".editando > p");
            input[0].value = paragraphs[0].innerHTML;
            input[1].value = paragraphs[1].innerHTML;
            input[2].value = paragraphs[2].innerHTML;
            codigoTeste.textContent = `Codigo: ${btn.value}`
            openModal();
            card.classList.remove("editando")
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