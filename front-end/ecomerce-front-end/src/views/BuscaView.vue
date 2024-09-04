<script setup>
import api from "@/services/api";
import { ref } from "vue";

const productsTags = ref([]);
const estabelecimentoTags = ref([]);
const products = ref([]);
const estabelecimentos = ref([]);
const isProduct = ref(false);
const currentTag = ref();

function setProduct(state) {
  isProduct.value = state;
}

async function handleSearch(event) {
  if (isProduct) {
    const url = `produtos/filter/${currentTag.value}`;
    products.value = await api.get(url);
  } else {
    const url = `estabelecimentos/filter/${currentTag.value}`;
    estabelecimentos.value = await api.get(url);
  }
}
</script>

<template>
  <main>
    <h1>BUSCAR</h1>
    <div class="first-row">
      <div>
        <h3>O que deseja buscar?</h3>
        <div class="buttons">
          <button @click="setProduct(false)">Estabelecimentos</button>
          <button @click="setProduct(true)">Produtos</button>
        </div>
      </div>
      <div class="search">
        <select v-if="isProduct" name="categorias-de-produto" id="categoria">
          <option v-for="tag in productsTags" :key="tag.id" :value="tag.name">
            {{ tag.name }}
          </option>
        </select>
        <select
          v-else
          name="categorias-de-estabelecimentos"
          id="produto"
        ></select>
        <option
          v-for="tag in estabelecimentoTags"
          :key="tag.id"
          :value="tag.name"
        >
          {{ tag.name }}
        </option>
        <button @click="handleSearch(tag.id)" class="submit">Buscar</button>
      </div>
    </div>

    <ul v-if="isProduct">
      <li v-for="product in products" :key="product.id" :value="product.name">
        {{ product.name }} <br />
        R${{ product.value }}
      </li>
    </ul>
    <ul v-else>
      <li
        v-for="estabelecimento in estabelecimentos"
        :key="estabelecimento.id"
        :value="estabelecimento.name"
      >
        {{ estabelecimento.name }}
      </li>
    </ul>
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

.first-row {
  display: flex;
  flex-direction: row;
  align-items: center;
  gap: 10%;
}
.buttons {
  display: flex;
  gap: 2%;
}
.search {
  display: flex;
  gap: 2%;
}
</style>