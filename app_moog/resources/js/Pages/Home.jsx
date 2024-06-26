
import Categories from '@/Components/categories';
import { Link } from '@inertiajs/react';
import Store from './Store';
import LisProducts from './Store/product-list';


export default function Home({ auth }) {

    return (
        <>
            <div className=" overflow-auto h-screen bg-gray-50 text-black  dark:bg-gradient-to-r dark:from-yellow-600 dark:to-black  dark:text-white/50">
                <div className=" relative min-h-screen flex flex-col items-center justify-center selection:bg-[#FF2D20] selection:text-white">
                    <div className="relative  min-w-2xl lg:min-w-7xl xl:w-screen">
                            {auth.user ? (
                                <Link
                                    href={route('dashboard')}
                                    className="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                                >
                                    Dashboard
                                </Link>
                            ) : (
                                <Store auth={auth.user}/>
                            )}
                        <main className=" container mx-auto mt-6">
                            {/* <Categories/> */}
                            {/* <LisProducts/> */}
                            <section className="bg-white dark:bg-gray-900">
                                <div className="py-8 px-4 mx-auto max-w-screen-xl lg:py-16">
                                    <div className="bg-gray-50 dark:bg-gray-800 border border-gray-200 dark:border-gray-700 rounded-lg p-8 md:p-12 mb-8">
                                        <a href="#" className="bg-blue-100 text-blue-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded-md dark:bg-gray-700 dark:text-blue-400 mb-2">
                                            <svg className="w-2.5 h-2.5 me-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 14">
                                                <path d="M11 0H2a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h9a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2Zm8.585 1.189a.994.994 0 0 0-.9-.138l-2.965.983a1 1 0 0 0-.685.949v8a1 1 0 0 0 .675.946l2.965 1.02a1.013 1.013 0 0 0 1.032-.242A1 1 0 0 0 20 12V2a1 1 0 0 0-.415-.811Z"/>
                                            </svg>
                                            Tutorial
                                        </a>
                                        <h1 className="text-gray-900 dark:text-white text-3xl md:text-5xl font-extrabold mb-2">O projeto MOOG Store</h1>
                                        <p className="text-lg font-normal text-gray-500 dark:text-gray-400 mb-6">É uma plataforma de comércio eletrônico que utiliza Laravel e Inertia.js como base tecnológica. Ele adota os padrões de design Parceiro DTO, Repositório e Serviço, juntamente com os princípios SOLID, para promover uma arquitetura de código limpa, modular e escalável.</p>
                                        <a href="https://github.com/RafaelMarquesFull/licitaNet-test" className="inline-flex justify-center items-center py-2.5 px-5 text-base font-medium text-center text-white rounded-lg bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-900">
                                            Read more
                                            <svg className="w-3.5 h-3.5 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                                <path stroke="currentColor" strokeLinecap="round" strokeLinejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                                            </svg>
                                        </a>
                                    </div>
                                    <div className="grid md:grid-cols-2 gap-8">
                                        <div className="bg-gray-50 dark:bg-gray-800 border border-gray-200 dark:border-gray-700 rounded-lg p-8 md:p-12">
                                            <a href="https://github.com/RafaelMarquesFull/licitaNet-test" className="bg-green-100 text-green-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded-md dark:bg-gray-700 dark:text-green-400 mb-2">
                                                <svg className="w-2.5 h-2.5 me-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 18">
                                                    <path d="M17 11h-2.722L8 17.278a5.512 5.512 0 0 1-.9.722H17a1 1 0 0 0 1-1v-5a1 1 0 0 0-1-1ZM6 0H1a1 1 0 0 0-1 1v13.5a3.5 3.5 0 1 0 7 0V1a1 1 0 0 0-1-1ZM3.5 15.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2ZM16.132 4.9 12.6 1.368a1 1 0 0 0-1.414 0L9 3.55v9.9l7.132-7.132a1 1 0 0 0 0-1.418Z"/>
                                                </svg>
                                                Design
                                            </a>
                                            <h2 className="text-gray-900 dark:text-white text-3xl font-extrabold mb-2">Tailwind CSS</h2>
                                            <p className="text-lg font-normal text-gray-500 dark:text-gray-400 mb-4">O Tailwind CSS oferece uma abordagem única e altamente configurável para estilizar aplicativos da web.</p>
                                            <a href="https://github.com/RafaelMarquesFull/licitaNet-test" className="text-blue-600 dark:text-blue-500 hover:underline font-medium text-lg inline-flex items-center">Read more
                                                <svg className="w-3.5 h-3.5 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                                <path stroke="currentColor" strokeLinecap="round" strokeLinejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                                            </svg>
                                            </a>
                                        </div>
                                        <div className="bg-gray-50 dark:bg-gray-800 border border-gray-200 dark:border-gray-700 rounded-lg p-8 md:p-12">
                                            <a href="https://github.com/RafaelMarquesFull/licitaNet-test" className="bg-purple-100 text-purple-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded-md dark:bg-gray-700 dark:text-purple-400 mb-2">
                                                <svg className="w-2.5 h-2.5 me-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                                                    <path stroke="currentColor" strokeLinecap="round" strokeLinejoin="round" stroke-width="2" d="M5 4 1 8l4 4m10-8 4 4-4 4M11 1 9 15"/>
                                                </svg>
                                                Code
                                            </a>
                                            <h2 className="text-gray-900 dark:text-white text-3xl font-extrabold mb-2">Laravel e Inertia.js</h2>
                                            <p className="text-lg font-normal text-gray-500 dark:text-gray-400 mb-4">
                                                O backend é construído com Laravel, oferecendo uma estrutura robusta para desenvolvimento rápido e seguro. O frontend é baseado em Inertia.js, permitindo a criação de interfaces de usuário dinâmicas sem a necessidade de uma API JSON separada.

                                                Padrão Parceiro DTO: Para transferência eficiente de dados entre as camadas do aplicativo, o projeto utiliza o padrão Parceiro DTO, garantindo coesão e segurança na manipulação de informações.

                                                Padrão Repositório e Inversão de Controle (IoC): O acesso aos dados do banco de dados é abstraído por meio do padrão Repositório, juntamente com o gerenciamento de imagens acompanhado da inversão de controle (IoC), que facilita a manutenção, teste e extensão do sistema.

                                                API REST: Embora a comunicação entre frontend e backend possa ser feita diretamente via Inertia.js, o projeto oferece uma API REST opcional para integração com outros sistemas e serviços externos.
                                            </p>
                                            <a href="https://github.com/RafaelMarquesFull/licitaNet-test" className="text-blue-600 dark:text-blue-500 hover:underline font-medium text-lg inline-flex items-center">Read more
                                                <svg className="w-3.5 h-3.5 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                                    <path stroke="currentColor" strokeLinecap="round" strokeLinejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </main>

                        <footer className="py-16 text-center text-sm text-black dark:text-white/70">
                           
                        </footer>
                    </div>
                </div>
            </div>
        </>
    );
}
