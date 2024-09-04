import { createRouter, createWebHistory } from 'vue-router'
import HomeView from '../views/HomeView.vue'
import ShopView from '../views/ProdutoView.vue'
import NotFoundView from '../views/NotFoundView.vue'
import CadastroEstabelecimentoView from "../views/CadastroEstabelecimentoView.vue"
import CadastroCategoriaView from "../views/CadastroCategoriaView.vue"
import BuscaView from "../views/BuscaView.vue"
import PedidoView from "../views/PedidoView.vue"

const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [
    {
      path: '/',
      name: 'home',
      component: HomeView
    },
    {
      path: "/estabelecimento",
      name:'CadastroEstabelecimentos',
      component: CadastroEstabelecimentoView
    },
    {
      path: '/produtos/',
      name: 'produtos',
      component: ShopView
   },
   {
    path: '/categoria',
    name: 'cadastro de categoria',
    component: CadastroCategoriaView
   },
   {
    path: '/buscar',
    name: 'filtar por categoria',
    component: BuscaView
   },
   {
    path: '/pedidos',
    name: 'realizar pedidos',
    component: PedidoView 
   },
    {
      path: '/:pathMatch(.*)*',
      name: "NotFound",
      component: NotFoundView
    }
  ]
})

export default router
