<template>
  <div class="flex row">
    <div>
      {{ modelValue.id }}
    </div>
    <div>
      {{ modelValue.name }}
    </div>
    <div>
      {{ modelValue.counter }}
    </div>
    <div>
      <button @click="add">Add</button>
      <button @click="subtract">Subtract</button>
    </div>
  </div>
</template>

<script>

import './css/second.css';

export default {
  name: "ListItem",
  props: {
    modelValue: {
      type: Object
    }
  },
  methods: {
    add() {
      this.modelValue.counter++
    },
    subtract() {
      this.modelValue.counter--
    }
  }
}
</script>

<style scoped>

</style>