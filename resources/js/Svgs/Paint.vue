<script setup>
import { computed } from 'vue';

const props = defineProps({
    fillColor: {
        type: String,
        default: 'white',
    },
    strokeColor: {
        type: String,
        default: 'black',
    },
    strokeWidth: {
        type: Number,
        default: 1.5,
    },
    size: {
        type: String,
        default: '8',
    },
});

const fillColor = computed(() => {
    return {
        'black': '#0F172A',
        'white': 'white'
    }[props.fillColor];
});

const strokeColor = computed(() => {
    return {
        'black': '#0F172A',
        'white': 'white'
    }[props.strokeColor];
});

const strokeWidth = computed(() => {
    return {
        '1': '1',
        '1.5': '1.5',
        '2': '2',
        '2.5': '2.5',
        '133': '3',
    }[props.strokeWidth];
});

const size = computed(() => {
    return {
        '1': 'w-1 h-1',
        '2': 'w-2 h-2',
        '3': 'w-3 h-3',
        '4': 'w-4 h-4',
        '5': 'w-5 h-5',
        '6': 'w-6 h-6',
        '7': 'w-7 h-7',
        '8': 'w-8 h-8',
        '9': 'w-9 h-9',
        '10': 'w-10 h-10',
        '11': 'w-11 h-11',
        '12': 'w-12 h-12'
    }[props.size];
});
</script>
<template>
    <svg :class="size" fill="transparent" :stroke-width="strokeWidth" stroke="var(--surface-900)"
        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round"
            d="M9.53 16.122a3 3 0 00-5.78 1.128 2.25 2.25 0 01-2.4 2.245 4.5 4.5 0 008.4-2.245c0-.399-.078-.78-.22-1.128zm0 0a15.998 15.998 0 003.388-1.62m-5.043-.025a15.994 15.994 0 011.622-3.395m3.42 3.42a15.995 15.995 0 004.764-4.648l3.876-5.814a1.151 1.151 0 00-1.597-1.597L14.146 6.32a15.996 15.996 0 00-4.649 4.763m3.42 3.42a6.776 6.776 0 00-3.42-3.42" />
    </svg>
</template>