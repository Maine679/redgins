<template>
  <div>
    <div class="container-fluid">
      <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-5 col-lg-4">
          <button type="button" class="btn btn-primary" @click="addNextElem">Добавить дополнительный параметр</button><br>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-5 col-lg-4">
            <select v-model="addparamname" class="form-select">
              <option
                v-for="(elem, index) in dataParam"
                :key="index"
                :value="index"
                v-if="isExists(elem)"
              >
              {{elem.name}}
              </option>

            </select>
        </div>
      </div>
    </div>
    <div class="container-fluid">
      <div class="row">
  <!--        <button type="button" class="btn btn-primary" @click="test">test</button><br>-->

        <div class="row"
          v-for="(elem, index) in arrElem"
          :key="index">

          <div class="col-xs-12 col-sm-4 col-md-3 col-lg-2">
            <label v-bind:for="elem.namefor +elem.id" class="form-label">{{ elem.name}}:</label>
          </div>
          <div class="col-xs-8 col-sm-6 col-md-7 col-lg-8">
            <div class="mb-3">
              <input v-bind:id="elem.name+elem.id" v-bind:type="elem.type" class="form-control" v-bind:name="elem.namefor +elem.id" aria-describedby="nameHelp">
            </div>
          </div>
          <div class="col-xs-4 col-sm-2 col-md-2 col-lg-1">
            <button type="button" class="btn btn-secondary" @click="deleteElem(index)">delete</button>
          </div>
            <div id="nameHelp" class="form-text">Задайте значение для данного параметра.</div>

        </div>

      </div>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      arrElem: [ //Это мой массив где будут добавляться и удаляться елементы!
        // {
          // id: 0,
          // namefor: "param_data_",
          // name: "Добавленный компонент",

        // }
      ],
      arrParam:[], //Здесь будет список параметров из которых можно будет выбрать
      addparamname: -1, //Переменная для получения выбранного значения.
    }
  },
  methods: {
    addNextElem() { //Это начало реализации метода добавления новых елементов
      if(this.addparamname >= 0 && this.isExists(this.dataParam[this.addparamname])) { //Проверяем что мы вообще выбрали какой то елемент.
        this.arrElem.push({
          id: 1 + Math.max(0, ...this.arrElem.map(n => n.id)),
          namefor: "param_data_",
          name: this.dataParam[this.addparamname].name,
          value: this.dataParam[this.addparamname].id,
          type: this.dataParam[this.addparamname].type ? "number":"text" //Здесь задаюься типы даныъ что бы корректно вводить данные  (строка и число) значений параметров.
        });
      }
    },
    deleteElem(index) { //Функция для удаления лишних строк! Важно!
      this.arrElem.splice(index,1);
    },
    isExists(elem) {
      for(var i=0; i<this.arrElem.length; i++) {
        if(this.arrElem[i].name == elem.name) {
          return false;
        }
      }
      return true;
    },
    test() {
      console.log(this.dataParam);
    }
  },
  props: [
     "dataParam"
  ]
}
</script>
