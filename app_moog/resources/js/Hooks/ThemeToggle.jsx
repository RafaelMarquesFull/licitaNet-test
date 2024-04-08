import { useEffect, useState } from 'react';

const useThemeToggle = () => {
    const [isDarkMode, setIsDarkMode] = useState(false);

    useEffect(() => {
        const initializeTheme = () => {
            const prefersDarkMode = window.matchMedia('(prefers-color-scheme: dark)').matches;
            const storedTheme = localStorage.getItem('color-theme');
            
            setIsDarkMode(storedTheme === 'dark' || (!storedTheme && prefersDarkMode));
        };
        initializeTheme();
    }, []);

    const toggleTheme = (isDark) => {
        const newTheme = isDark ? 'light' : 'dark';
        setIsDarkMode(isDark);
        document.documentElement.classList.toggle('dark', isDark);
        localStorage.setItem('color-theme', newTheme);
    };

    return { isDarkMode, toggleTheme };
};

export default useThemeToggle;
