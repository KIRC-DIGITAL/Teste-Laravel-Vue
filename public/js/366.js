"use strict";(self.webpackChunk=self.webpackChunk||[]).push([[366],{6107:(e,t,a)=>{a.d(t,{Z:()=>s});var d=a(1519),n=a.n(d)()((function(e){return e[1]}));n.push([e.id,"[data-v-5ee94db1] .modal-backdrop{opacity:.5!important}[data-v-5ee94db1] .vue-notification{font-size:15px!important}",""]);const s=n},1366:(e,t,a)=>{a.r(t),a.d(t,{default:()=>i});var d=a(381),n=a.n(d);const s={props:["selected"],data:function(){return{loading:!1,moment:n()}},watch:{},computed:{},methods:{}};var o=a(3379),l=a.n(o),c=a(6107),r={insert:"head",singleton:!1};l()(c.Z,r);c.Z.locals;const i=(0,a(1900).Z)(s,(function(){var e=this,t=e.$createElement,a=e._self._c||t;return a("b-modal",{attrs:{id:"visualizarModal","no-close-on-backdrop":""},scopedSlots:e._u([{key:"modal-header",fn:function(t){var d=t.close;return[a("h5",[e._v("Detalhes de Pagamento")]),e._v(" "),a("b-button",{attrs:{size:"sm",variant:"outline-danger"},on:{click:function(e){return d()}}},[e._v("x")])]}},{key:"modal-footer",fn:function(t){var d=t.cancel;return[a("b-button",{attrs:{size:"md",variant:"outline-danger",disabled:e.loading},on:{click:function(e){return d()}}},[e._v("\n                Cancelar\n            ")])]}}])},[e._v(" "),a("b-card",[a("b-card-text",[a("b",[e._v("Data: "+e._s(e.selected?e.moment(e.selected.created_at).format("YYYY-MM-DD HH:mm"):"NI"))])]),e._v(" "),a("b-card-text",[a("b",[e._v("Status: "+e._s(e.selected&&e.selected.pagamento?e.selected.pagamento.status.nome:"NI"))])]),e._v(" "),a("b-card-text",[a("b",[e._v("Transação: "+e._s(e.selected&&e.selected.pagamento?e.selected.pagamento.transacao:"NI"))])]),e._v(" "),a("b-card-text",[a("b",[e._v("Forma de Pagamento: "+e._s(e.selected&&e.selected.pagamento&&e.selected.pagamento.tipo_pgto?e.selected.pagamento.tipo_pgto.nome:"NI"))])]),e._v(" "),a("b-card-text",[a("b",[e._v("Detalhe: "+e._s(e.selected&&e.selected.pagamento&&e.selected.pagamento.tipo_pgto_detalhe?e.selected.pagamento.tipo_pgto_detalhe.nome:"NI"))])])],1),e._v(" "),a("table",{staticClass:"table table-sm table-striped table-hover table-bordered mt-3"},[a("thead",[a("tr",[a("th",{staticClass:"align-middle text-center",attrs:{width:"10%"}},[e._v("Produto")]),e._v(" "),a("th",{staticClass:"align-middle text-center",attrs:{width:"10%"}},[e._v("Valor")])])]),e._v(" "),a("tbody",[a("tr",[a("td",{staticClass:"align-middle text-center"},[e._v(e._s(e.selected&&e.selected.vendas_item&&e.selected.vendas_item.produto?e.selected.vendas_item.produto.nome:"NI"))]),e._v(" "),a("td",{staticClass:"align-middle text-center"},[e._v(e._s(e.selected&&e.selected.vendas_item&&e.selected.vendas_item.produto?e.selected.vendas_item.produto.valor:"NI"))])])])]),e._v(" "),void 0],2)}),[],!1,null,"5ee94db1",null).exports}}]);