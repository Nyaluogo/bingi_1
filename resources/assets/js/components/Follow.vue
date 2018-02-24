<template>

        <div>
          <p class= "text-center" v-if="loading">
            Loading...
          </p>

          <p class = "text-center" v-if="!loading">
            <button class="btn btn-sm btn-clear-g" v-if="status == 0" @click="follow">follow</button>
            
            <button class="btn btn-sm btn-clear-g" v-if="status == 'following'" @click="unfollow">Unfollow</button>
            <button class="btn btn-sm btn-clear-g" v-if="status == 'following_you'" @click="follow">Follow</button>
            <span class = "text-success" v-if = "status == 'following_you'">this user is following you</span>
            
          </p>
          <p class = "text-center" v-if="!loading">
            
            <span class = "text-success" v-if = "status == 'following_you'">this user is following you</span>
            
          </p>

        </div>

</template>

<script>
    export default {
        mounted() {
            this.$http.get('/check_relationship_status/' + this.profile_user_id)
              .then((resp)=>
            {
              console.log(resp)
              this.status = resp.body.status
              this.loading = false
            })
        },

        props: ['profile_user_id'],

        data(){
          return{
            status: '',
            loading: true
          }
        },

        methods: {
      

          follow(){
            this.loading = true
            this.$http.get('/follow/' + this.profile_user_id)
              .then((response)=>{
                if(response.body == 1)
                  this.status == 'waiting'
                  
                  this.loading = false
              })
          },

          unfollow(){
            this.loading = true
            this.$http.get('/unfollow/' + this.profile_user_id)
              .then((response)=>{
                if(response.body == 1)
                  this.status == 'waiting'
                  
                  this.loading = false
              })
          },

         
        }
    }
</script>
