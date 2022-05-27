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
.flex {
  justify-content: space-between;
  padding: 0.5em 2em;
}
</style>