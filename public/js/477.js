"use strict";(self.webpackChunk=self.webpackChunk||[]).push([[477],{1994:(t,e,a)=>{a.d(e,{Z:()=>r});var n=a(1519),o=a.n(n)()((function(t){return t[1]}));o.push([t.id,"[data-v-5f8a2de4] .modal-backdrop{opacity:.5!important}",""]);const r=o},9477:(t,e,a)=>{a.r(e),a.d(e,{default:()=>c});const n={props:["selected"],data:function(){return{loading:!1,baseUrl:"https://www.sistemas.intercom.org.br"}},methods:{destroy:function(){this.$emit("destroy")},confirmar:function(t){var e=this;this.loading=!0,axios.post("".concat("https://www.sistemas.intercom.org.br","/validar-apresentacao-expocom/confirmar_apresentacao"),t).then((function(t){e.loading=!1,200==t.status&&(e.$emit("store",t.data.response),e.$notify({group:"submit",title:"Sucesso!",text:"Apresentação confirmada.",type:"success"}))})).catch((function(t){e.loading=!1,422==t.response.status&&"The given registro was invalid."==t.response.data.message&&e.$notify({group:"submit",title:"Erro no cadastro",text:"Campos obrigatórios não preenchidos.",type:"error"}),403==t.response.status&&"This action is unauthorized."==t.response.data.message&&e.$notify({group:"submit",title:"Erro!",text:"Ação não autorizada.",type:"error"})}))}}};var o=a(3379),r=a.n(o),s=a(1994),i={insert:"head",singleton:!1};r()(s.Z,i);s.Z.locals;const c=(0,a(1900).Z)(n,(function(){var t=this,e=t.$createElement,a=t._self._c||e;return a("b-modal",{attrs:{id:"visualizarModal","no-close-on-backdrop":""},scopedSlots:t._u([{key:"modal-header",fn:function(e){var n=e.close;return[a("h5",[t._v("Confirmar Apresentação ? ")]),t._v(" "),a("b-button",{attrs:{size:"sm",variant:"outline-danger",disabled:t.loading},on:{click:function(t){return n()}}},[t._v("x")])]}},{key:"modal-footer",fn:function(e){var n=e.cancel;return[a("b-button",{attrs:{size:"md",variant:"outline-danger",disabled:t.loading},on:{click:function(t){return n()}}},[t._v("\n            Não\n        ")]),t._v(" "),a("b-button",{attrs:{size:"md",variant:"outline-success"},on:{click:function(e){return t.confirmar(t.selected)}}},[t._v("\n            Sim\n        ")])]}}])},[t._v(" "),[a("b-alert",{attrs:{show:"",variant:"danger"}},[a("h5",[t._v("ATENÇÃO!")]),t._v(" "),a("p",[a("strong",[t._v("Tem certeza que deseja confirmar a apresentação desse trabalho ? ")]),t._v(" Essa ação é irreversível!")])])]],2)}),[],!1,null,"5f8a2de4",null).exports}}]);