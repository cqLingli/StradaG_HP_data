import{C as n}from"./index.791952bc.js";import{c as s}from"./vuex.esm.8fdeb4b6.js";import{n as i}from"./_plugin-vue2_normalizer.61652a7c.js";const a={components:{CoreAlert:n},props:{addon:String,coreFeature:{type:Array,default(){return[]}},addonFeature:{type:Array,default(){return[]}}},data(){return{strings:{thisFeatureRequires:this.$t.__("This feature requires one of the following plans:",this.$td),thisFeatureRequiresSingular:this.$t.__("This feature requires the following plan:",this.$td)}}},computed:{...s(["isUnlicensed"]),requiredPlansString(){return 1<this.requiredPlans.length?this.strings.thisFeatureRequires:this.strings.thisFeatureRequiresSingular},getRequiredPlans(){return this.requiredPlans.join(", ")},showAlert(){return this.level?!this.$license.hasMinimumLevel(this.level)&&this.requiredPlans.length:this.$addons.requiresUpgrade(this.addon)&&this.requiredPlans.length},requiredPlans(){if(this.coreFeature.length||this.addonFeature.length){const t=this.coreFeature[0]||this.addonFeature[0],e=this.coreFeature.length?typeof this.coreFeature[1]<"u"?this.coreFeature[1]:"":typeof this.addonFeature[1]<"u"?this.addonFeature[1]:"";return this.$license.getPlansForFeature(t,e)}return this.$addons.currentPlans(this.addon)}}};var u=function(){var e=this,r=e._self._c;return e.isUnlicensed||e.showAlert?r("core-alert",{attrs:{type:"red"}},[e._v(" "+e._s(e.requiredPlansString)+" "),r("strong",[e._v(e._s(e.getRequiredPlans))])]):e._e()},o=[],l=i(a,u,o,!1,null,null,null,null);const _=l.exports;export{_ as R};