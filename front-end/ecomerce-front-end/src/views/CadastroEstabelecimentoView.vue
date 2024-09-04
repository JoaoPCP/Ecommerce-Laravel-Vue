<script setup>
import api from "@/services/api";
import { ref } from "vue";

const tags = ref([]);
function handleSubmit(event) {}
function tagList() {
  const response = api.get("/categoria_estabelecimentos");
  response = response.json();
  tags.value = response;
}
</script>

<template>
  <forms @submit="handleSubmit">
    <div class="formulario">
      <h1>CADASTRO DE ESTABELECIMENTO</h1>
      <div class="name">
        <h3>Nome do Estabelecimento</h3>
        <input type="text" placeholder="Mercadinho do João" />
      </div>
      <div class="description">
        <h3>Descricao do Estabelecimento</h3>
        <textarea
          name="description"
          id=""
          cols="50"
          rows="5"
          placeholder="os melhores preços da cidade"
        ></textarea>
      </div>
      <div class="tags">
        <h3>Categorias do Estabelecimento</h3>
        <select name="tags" id="tags">
          <option v-for="tag in tags" :key="tag.id" :value="tag.name">
            {{ tag.name }}
          </option>
        </select>
      </div>

      <section class="endereco">
        <h3>Endereço do Estabelecimento</h3>
        <div class="cep">
          <p>CEP</p>
          <input type="text" />
          <button>Preencher</button>
        </div>
        <div class="detalhes">
          <div class="itens-endereco">
            <p>Estado</p>
            <input type="text" placeholder="Rua tal" />
          </div>
          <div class="itens-endereco">
            <p>Cidade</p>
            <input type="text" placeholder="Rua tal" />
          </div>
          <div class="itens-endereco">
            <p>Logradouro:</p>
            <input type="text" placeholder="Rua tal" />
          </div>
          <div class="itens-endereco">
            <p>Número</p>
            <input type="text" placeholder="Rua tal" />
          </div>
          <div class="itens-endereco"></div>
        </div>
      </section>
      <button class="cadastrar">Cadastrar</button>
    </div>
  </forms>
</template>

<style scoped>
.formulario {
  padding: 10%;
  padding-top: 5%;
  display: flex;
  flex-direction: column;
}
.name input {
  width: 50%;
}
textarea {
  resize: none;
}

.description input {
  width: 50%;
  height: 200%;
}
.tags select {
  width: 50%;
}
.endereco {
  display: flex;
  flex-direction: column;
}
.cep {
  align-items: center;
  gap: 1%;
  width: 50%;
}
.endereco div {
  display: flex;
}
.detalhes {
  justify-content: space-evenly;
}
.itens-endereco {
  flex-direction: column;
}
h1 {
  align-self: center;
}
</style>