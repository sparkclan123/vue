<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="/js/vue.js"></script>

    <title>Document</title>
</head>
<body>
 {{--///////////////////////////////////////--}}
    <div id="demo">
        <button v-on:click="show = !show">
            กดเเล้วหาย
        </button>
        <transition name="fade">
            <p v-if="show">สวัดดี</p>
        </transition>
    </div>
<script>
    new Vue({
    el: '#demo',
    data: {
    show: true
}
})
</script>
<style>
    .fade-enter-active, .fade-leave-active {
    transition: opacity .5s
    }
    .fade-enter, .fade-leave-to /* .fade-leave-active below version 2.1.8 */ {
    opacity: 0
    }
</style>
{{-- ///////////////////////////////////////////--}}

<div id="example-1">
  <button @click="show = !show">
    กดเเล้วเลื่อนหาย
  </button>
  <transition name="slide-fade">
    <p v-if="show">ไงล้ะ</p>
  </transition>
</div>
<script>
    new Vue({
    el: '#example-1',
    data: {
        show: true
    }
    })
</script>
<style>
    .slide-fade-enter-active {
    transition: all .3s ease;
    }
    .slide-fade-leave-active {
    transition: all .8s cubic-bezier(1.0, 0.5, 0.8, 1.0);
    }
    .slide-fade-enter, .slide-fade-leave-to
    /* .slide-fade-leave-active below version 2.1.8 */ {
    transform: translateX(10px);
    opacity: 0;
}
</style>
{{--////////////////////////////////////////////--}}

<transition name="component-fade" mode="out-in">
  <component v-bind:is="view"></component>
</transition>

<script>
new Vue({
  el: '#transition-components-demo',
  data: {
    view: 'v-a'
  },
  components: {
    'v-a': {
      template: '<div>Component A</div>'
    },
    'v-b': {
      template: '<div>Component B</div>'
    }
  }
})
</script>
<style>
.component-fade-enter-active, .component-fade-leave-active {
  transition: opacity .3s ease;
}
.component-fade-enter, .component-fade-leave-to
/* .component-fade-leave-active below version 2.1.8 */ {
  opacity: 0;
}
</style>
{{-- /////////////////////////////////////////// --}}


{{-- ///////////////////////////////////// --}}
<div id="example-2">
  <button @click="show = !show">วาบหาย</button>
  <transition name="bounce">
    <p v-if="show">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris facilisis enim libero, at lacinia diam fermentum id. Pellentesque habitant morbi tristique senectus et netus.</p>
  </transition>
</div>
<script>
   new Vue({
    el: '#example-2',
    data: {
    show: true
  }
})
</script>
<style>
  .bounce-enter-active {
  animation: bounce-in .5s;
  }
  .bounce-leave-active {
    animation: bounce-in .5s reverse;
  }
  @keyframes bounce-in {
  0% {
    transform: scale(0);
  }
  50% {
    transform: scale(1.5);
  }
  100% {
    transform: scale(1);
  }
}
</style>

</body>
</html>