<script setup>
import api from "../services/api";
import { computed, ref } from "vue";
const carrinho = ref([
  {
    id: 1,
    name: "bazar",
    value: 100,
  },
  {
    id: 2,
    name: "lili",
    value: 50.55,
  },
]);
</script>

<template>
  <main>
    <h1>Realizar Pedido</h1>
    <h3>No carrinho</h3>
    <ul>
      <li v-for="item in carrinho" :key="item.id">
        {{ item.name }} <br />
        R$ {{ item.value }}
      </li>
    </ul>
    <p>valor total:</p>
    <button class="purchase">Fazer Pedido</button>
  </main>
</template>

<style scoped>
main {
  padding: 10%;
  padding-top: 5%;
  display: flex;
  flex-direction: column;
}
ul {
  list-style: none;
  display: flex;
  gap: 5%;
}
h1 {
  align-self: center;
}
.purchase {
  width: 15%;
  height: 2rem;
  font-size: 1rem;
  align-self: center;
}
</style>