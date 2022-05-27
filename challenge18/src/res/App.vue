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

<style>

.flex {
  display: flex;
  align-content: center;
  justify-content: center;
}

.column {
  flex-direction: column;
}

.row {
  flex-direction: row;
}

.row > .reverse {
  flex-direction: row-reverse;
}

.column > .reverse {
  flex-direction: column-reverse;
}

.card {
  box-shadow: 0 0.3em #AAAAAA;
  background-color: #FFFFFF;
  padding: 0.2em;
}

.round {
  border-radius: 1em;
}

.mx-auto {
  margin: auto;
}


</style>