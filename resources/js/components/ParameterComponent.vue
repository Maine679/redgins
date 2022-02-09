<template>
  <div class="mb-3">
    <label v-bind:for="ParamComp.name" class="form-label">Название товара:</label>
    <input v-bind:id="ParamComp.testID" type="text" class="form-control" v-bind:name="ParamComp.name" aria-describedby="nameHelp">
    <div id="nameHelp" class="form-text">Напишите название которое будет отображаться на сайте.</div>
  </div>

</template>

<script>
export default {
  props: ['ParamComp']
}
</script>
