<script setup>
import api from "@/services/api";
import axios from "axios";
import { onMounted } from "vue";
import { useRouter } from "vue-router";

const router = useRouter();
</script>
 
<template>
  <p>{{ estabelecimentos }}</p>
</template>
