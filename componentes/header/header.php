<link href="/web-backend-b/icatalogo-parte1/componentes/header/header.css" rel="stylesheet" />
<header class="header">
    <figure>
        <img src="/web-backend-b/icatalogo-parte1/imgs/logo.png" />
    </figure>
    <input type="search" placeholder="Pesquisar" />
    <nav>
        <ul>
            <a id="menu-admin">Administrar</a>
        </ul>
    </nav>
    <div id="container-login" class="container-login">
        <h1>Fazer Login</h1>
        <form>
            <input type="hidden" name="acao" value="login" />
            <input type="text" name="usuario" placeholder="Usuário" />
            <input type="password" name="senha" placeholder="Senha" />
            <button>Entrar</button>
        </form>
    </div>
</header>
<script lang="javascript">
    document.querySelector("#menu-admin").addEventListener("click", toggleLogin);

    function toggleLogin() {
        let containerLogin = document.querySelector("#container-login");
        //se estiver oculto, mostra 
        if (containerLogin.style.opacity == 0) {
            containerLogin.style.opacity = 1;
            containerLogin.style.height = "200px";
            //se não, oculta
        } else {
            containerLogin.style.opacity = 0;
            containerLogin.style.height = "0px";
        }
    }
</script>