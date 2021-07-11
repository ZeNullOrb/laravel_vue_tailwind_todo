<template>
    <div>
        <h3>
            Projects
        </h3>
        <ul>
            <li v-for="project in projects" :key="project.id">
                {{ project.title }}
            </li>
        </ul>
    </div>
</template>

<script>
export default{


    data(){
        return {
            projects:[]
        }
    },
    beforeCreate(){
        axios.get('http://laravelvuetailwindtodo.test/api/project').then((response)=>{
            this.projects = response.data;
        })
    }
}
</script>
