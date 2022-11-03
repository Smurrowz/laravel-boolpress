<template>
  <div>
    <section class="text-center">
      <h1>contatti</h1>
      <p>
        COMPILA IL FORM PER CONTATTARCI
      </p>
    </section>
    <section>
      <LeadForm class="text-center"></LeadForm>
      
    </section>
  </div>
</template>
<script>
import LeadForm from '../components/LeadForm.vue';
export default {
  components: {
    LeadForm,
  }

}
</script>
