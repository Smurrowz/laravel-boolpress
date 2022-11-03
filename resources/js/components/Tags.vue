<template>
  <div>
    <ul>
      <li v-for="(tag, index) in tags" :key="index">{{ tag.name }}</li>
    </ul>
  </div>
</template>
<script>
export default {
  props: {
    tags: {
      type: Array,
      required: true
    }
}
}
</script>