import { defineConfig } from 'vite'
import react from '@vitejs/plugin-react-swc'

// https://vite.dev/config/
export default defineConfig({
  server: {
    host: "0.0.0.0",
    allowedHosts: ['frontend', 'localhost', '0.0.0.0'] // Add allowed hosts here
  },
  
  plugins: [react()],
})
