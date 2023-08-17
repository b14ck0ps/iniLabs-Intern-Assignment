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
        <h1 class="mb-10 text-3xl">TODO APP</h1>
        <form class="flex gap-5" @submit.prevent="submit">
            <input id="todo" type="text" placeholder="Add new Todo" v-model="form.task"
                className="input input-bordered w-[400px] max-w-xs focus:outline-none" />
            <button className="btn btn-outline btn-primary">Add</button>
        </form>

        <section class="w-[400px]">
            <ul class="mt-10">
                <li v-for="(todo, index) in todos" :key="index"
                    class="flex items-center justify-between w-full p-5 mb-5 rounded-md shadow bg-slate-100 ">
                    <div class="flex items-center gap-2">
                        <input @click="updateTodo(todo)" :checked="todo.completed" type="checkbox"
                            class="checkbox checkbox-primary checkbox-xs" />
                        <span class="text-xl font-bold" :class="{ 'line-through text-gray-300': todo.completed }"
                            v-text="todo.task"></span>
                    </div>
                    <button @click="deleteTodo(todo.id)" class="btn btn-outline btn-error btn-sm">Delete</button>
                </li>
            </ul>
        </section>

    </main>
</template>
