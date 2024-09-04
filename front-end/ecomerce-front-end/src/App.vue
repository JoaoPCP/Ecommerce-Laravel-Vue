<script setup>
import { ref } from "vue";
import { RouterLink, RouterView } from "vue-router";
</script>

<template>
  <main>
    <nav class="header">
      <RouterLink to="/" class="header-item">Home</RouterLink>
      <RouterLink to="/estabelecimento" class="header-item"
        >Estabelecimento</RouterLink
      >
      <RouterLink to="/produtos" class="header-item">Produtos</RouterLink>
      <RouterLink to="/categoria" class="header-item"> Categoria</RouterLink>
      <RouterLink to="/Buscar" class="header-item"> Buscar</RouterLink>
      <div>
        <RouterLink to="/pedidos" class="header-item">
          Concluir compras</RouterLink
        >
      </div>
    </nav>
    <section class="content">
      <RouterView />
    </section>
  </main>
</template>

<style scoped>
.header {
  background-color: white;
  display: flex;
  height: 6rem;
  align-items: center;
  justify-content: space-evenly;
}
.header-item {
  font-size: 2rem;
}
.content {
  margin-top: 2%;
  background: whitesmoke;
  width: 80%;
  align-self: center;
  margin-left: 10%;
  justify-content: center;
  align-items: center;
}
</style>
