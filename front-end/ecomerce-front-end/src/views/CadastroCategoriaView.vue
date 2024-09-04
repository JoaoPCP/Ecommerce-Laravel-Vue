<script setup>
import api from "@/services/api";
import { ref } from "vue";

const currentTagName = ref("");
const currentTagTypeId = ref(0);
function setCurrentTagTypeId(id) {
  currentTagTypeId.value = id;
}
async function handleSubmit(event) {
  event.preventDefault();

  if (!currentTagName || !currentTagTypeId) return;
  if (currentTagTypeId.value == 1) {
    console.log(currentTagName.value, currentTagTypeId.value);
    const response = await api.post("/categoria_estabelecimento", {
      name: currentTagName.value,
    });
  } else if (currentTagTypeId.value == 2) {
    const response = await api.post("/categoria_produtos", {
      name: currentTagName.value,
    });
  }
}
</script>

<template>
  <form @submit="handleSubmit">
    <h1>CADASTRO DE CATEGORIA</h1>
    <div class="name">
      <label for="cname">
        <h3>Nome da categoria</h3>
      </label>
      <input type="text" id="cname" v-model="currentTagName" />
    </div>
    <div class="tipo">
      <h3>É uma categoria de:</h3>
      <div>
        <input
          name="type"
          type="radio"
          id="estabelecimentos"
          value="1"
          @click="setCurrentTagTypeId(1)"
        />
        <label for="estabelecimentos">Estabelecimentos</label>
        <input
          name="type"
          type="radio"
          id="produtos"
          value="2"
          @click="setCurrentTagTypeId(2)"
        />
        <label for="prdutos">Produtos </label>
      </div>
    </div>
    <input type="submit" value="Cadastrar" class="cadastrar" />
  </form>
</template>

<style scoped>
form {
  padding: 10%;
  padding-top: 5%;
  display: flex;
  flex-direction: column;
}
h1 {
  align-self: center;
}
.tipo div {
  display: flex;
  align-items: center;
  gap: 2%;
}
</style>