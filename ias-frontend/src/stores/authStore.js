import { defineStore } from 'pinia';
import { ref, computed } from 'vue';
import axios from 'axios';

export const useAuthStore = defineStore('auth', () => {
  const token = ref(localStorage.getItem('auth_token'));
  const user = ref(JSON.parse(localStorage.getItem('auth_user') || 'null'));

  const isAuthenticated = computed(() => !!token.value);

  const setToken = (newToken) => {
    token.value = newToken;
    if (newToken) {
      localStorage.setItem('auth_token', newToken);
    } else {
      localStorage.removeItem('auth_token');
    }
  };

  const setUser = (newUser) => {
    user.value = newUser;
    if (newUser) {
      localStorage.setItem('auth_user', JSON.stringify(newUser));
    } else {
      localStorage.removeItem('auth_user');
    }
  };

  const login = async (credentials) => {
    try {
      const response = await axios.post('/api/auth/login', credentials);
      setToken(response.data.token);
      setUser(response.data.user);
    } catch (err) {
      throw err.response?.data || err;
    }
  };

  const logout = () => {
    token.value = null;
    user.value = null;
    localStorage.removeItem('auth_token');
    localStorage.removeItem('auth_user');
  };

  return {
    token,
    user,
    isAuthenticated,
    setToken,
    setUser,
    login,
    logout
  };
});
