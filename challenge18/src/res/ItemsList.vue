<template>
  <div class="card round mx-auto" style="width: 500px">
    <div>
      <h4>List</h4>
    </div>
    <div>
      <list-item v-for="(item, key) in modelValue" :key="key" v-model="modelValue[key]"></list-item>
    </div>
  </div>
</template>

<script>
import ListItem from "./ListItem.vue"

export default {
  name: "ItemsList",
  components: {ListItem},
  props: {
    modelValue: {
      type: Array,
      default: () => []
    }
  }
}
</script>

<style scoped>

</style>