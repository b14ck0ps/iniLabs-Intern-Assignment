<script setup>
import { Head, router } from '@inertiajs/vue3';
import { reactive } from 'vue';

defineProps({
    todos: {
        type: Array,
        default: () => []
    }
})

const form = reactive({
    task: ''
})

function submit() {

    if (form.task === '') return
    router.post('/', form)
    form.task = ''
}

function updateTodo(todo) {
    todo.completed = !todo.completed
    router.put('/', todo)
}

function deleteTodo(id) {
    router.delete(`/${id}`)
}

</script>

<template>
    <Head title="TODOS" />
    <main class="flex flex-col items-center justify-center mt-32">
        <div class="mb-10 text-center">
            <h1 class="text-4xl hover:cursor-pointer ">TODO APP</h1>
            <p class="text-xs">Made By Azran</p>
        </div>
        <form class="flex gap-5 mb-10" @submit.prevent="submit">
            <input id="todo" type="text" placeholder="Add new Todo" v-model="form.task"
                className="input input-bordered w-[300px] md:w-[400px] max-w-xs focus:outline-none" />
            <button className="btn btn-outline btn-neutral">Add</button>
        </form>

        <section class="xl:w-[600px] w-[350px] md:w-[400px]">
            <div v-for="(todo, index) in todos" :key="index">
                <div class="p-5 mb-10 overflow-hidden rounded-md shadow bg-slate-100">
                    <div class="flex justify-between">
                        <div class="flex gap-4">
                            <input @click="updateTodo(todo)" :checked="todo.completed" type="checkbox" class="checkbox " />
                            <p class="text-xl text-gray-700" :class="{ 'line-through': todo.completed }">{{
                                todo.task }}</p>
                        </div>
                        <button @click="deleteTodo(todo.id)" class="btn btn-outline btn-error btn-sm">Delete</button>
                    </div>
                </div>
            </div>
        </section>
    </main>
</template>
