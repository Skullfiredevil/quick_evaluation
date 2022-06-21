<template>
  <div class="flex column">
    <div>
      <h2>Our List of items</h2>
    </div>
    <items-list v-model="items"></items-list>
  </div>
</template>

<script>
import ItemsList from "./ItemsList.vue";

export default {
  name: "App",
  components: {ItemsList},
  data() {
    return {
      items: [
        {
          id: 1,
          name: 'Item 1',
          counter: 1
        },
        {
          id: 2,
          name: 'Item 2',
          counter: 2
        },
        {
          id: 3,
          name: 'Item 3',
          counter: 3
        },
        {
          id: 4,
          name: 'Item 4',
          counter: 4
        },
        {
          id: 5,
          name: 'Item 5',
          counter: 5
        }
      ]
    }
  }
}
</script>

<style scoped>

</style>