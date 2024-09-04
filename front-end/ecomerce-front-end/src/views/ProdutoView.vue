<script setup>
import api from "@/services/api";
import { ref } from "vue";

const tags = ref([]);
function handleSubmit(event) {}
async function tagList() {
  const response = await api.get("/categoria_produtos");
  response = response.json();
  tags.value = response;
}
</script>

<template>
  <main>
    <h1>CADASTRO DO PRODUTO</h1>
    <div class="name">
      <h3>Nome do produto:</h3>
      <input type="text" />
    </div>
    <div class="value">
      <h3>Valor do produto:</h3>
      <input type="text" />
    </div>
    <div class="tags">
      <h3>Categorias do Estabelecimento</h3>
      <select name="tags" id="tags">
        <option v-for="tag in tags" :key="tag.id" :value="tag.name">
          {{ tag.name }}
        </option>
      </select>
    </div>
    <button class="cadastrar">Cadastrar</button>
  </main>
</template>

<style scoped>
main {
  padding: 10%;
  padding-top: 5%;
  display: flex;
  flex-direction: column;
}
h1 {
  align-self: center;
}

input {
  width: 50%;
  font-size: 100%;
}
</style>