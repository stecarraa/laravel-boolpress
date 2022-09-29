<template>
    <section>
        <HeaderComponent />
        <Main/>
         <router-view>   </router-view>
    </section>
</template>

<script>
import Main from "../components/Main.vue"
import HeaderComponent from "../components/HeaderComponent.vue"


export default {
      components: { Main },
      components: { HeaderComponent }
}
</script>

<style>
</style>