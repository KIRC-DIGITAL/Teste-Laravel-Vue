"use strict";(self.webpackChunk=self.webpackChunk||[]).push([[419],{2419:(t,e,i)=>{i.r(e),i.d(e,{default:()=>r});var o=i(6368);const l={props:["filters"],components:{Datepicker:i(7540).Z},data:function(){return{ptBR:o.ptBR,filter:{tipo:null},regioes:[{text:"Norte",value:"norte"},{text:"Nordeste",value:"nordeste"},{text:"Sul",value:"sul"},{text:"Sudeste",value:"sudeste"},{text:"Centro Oeste",value:"centro_oeste"},{text:"Nacional",value:"nacional"}]}},watch:{filters:{deep:!0,handler:function(){this.filter.tipo=this.filters.tipo}}},methods:{clear:function(t){this.filter[t]=null,this.emit()},emit:function(){if(this.filter.data_final&&this.filter.data_inicial){var t=moment(this.filter.data_final),e=moment(this.filter.data_inicial);if(t.diff(e,"days")>93)return this.$notify({group:"submit",title:"Erro!",text:"Periodo deve ser menor do que 3 meses.",type:"error"}),!1;this.$emit("filter",this.filter)}else this.$notify({group:"submit",title:"Erro!",text:"Selecione um periodo.",type:"error"})}},created:function(){this.filter.data_inicial=moment().subtract(3,"months").format(),this.filter.data_final=moment().format()}};const r=(0,i(1900).Z)(l,(function(){var t=this,e=t.$createElement,i=t._self._c||e;return i("div",{staticClass:"col-12 mb-2"},[i("div",{staticClass:"row"},[i("b-col",{attrs:{cols:"12",sm:"6",lg:"6"}},[i("b-form-group",{attrs:{label:"Pesquisar por tipo","label-class":"font-weight-bold"}},[i("b-form-select",{class:["form-control form-control-sm"],attrs:{name:"tipo",size:"sm","data-vv-as":"Regiao"},on:{input:t.emit},model:{value:t.filter.tipo,callback:function(e){t.$set(t.filter,"tipo",e)},expression:"filter.tipo"}},[i("option",{domProps:{value:null}},[t._v("Selecione...")]),t._v(" "),t._l(t.regioes,(function(e){return i("option",{key:e.value,domProps:{value:e.value}},[t._v("\n                    "+t._s(e.text)+"\n                ")])}))],2)],1)],1)],1)])}),[],!1,null,null,null).exports}}]);