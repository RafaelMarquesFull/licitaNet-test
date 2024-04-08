import ResponsiveNavLink from '@/Components/ResponsiveNavLink';
import MapaBrasil from '@/Components/map';
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout';
import { Head } from '@inertiajs/react';
import { useEffect, useState } from 'react';



export default function Products({ auth , locations, products}) {
    console.log(products);

   const getState = (event) => {
        console.log(event)
    }
    return (
        <AuthenticatedLayout
            user={auth.user}
            header={<h2 className="font-semibold text-xl text-gray-800 leading-tight">Products</h2>}
        >
            <Head title="Dashboard" />

            
           <section className='w-11/12 m-auto p-5 rounded-sm border'>
                <div className='w-auto	h-full m-5 p-5 flex items-center justify-center border-2  box-border' >
                    <MapaBrasil locations={locations} getState={getState}/>
                </div>

                <div className="relative  shadow-md sm:rounded-lg box-border m-7 ">
                    <div className="flex items-center justify-between flex-column md:flex-row flex-wrap space-y-4 md:space-y-0 py-4 bg-white dark:bg-gray-900">
                        {/* Dropdown */}
                        <div>
                            <button id="dropdownActionButton" data-dropdown-toggle="dropdownAction" className="inline-flex items-center text-gray-500 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 font-medium rounded-lg text-sm px-3 py-1.5 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700 mx-4" type="button">
                                <span className="sr-only">Action button</span>
                                Filtrar por Cidade
                                <svg className="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" strokeLinecap="round" strokeLinejoin="round" strokeWidth="2" d="m1 1 4 4 4-4" />
                                </svg>
                            </button>
                            {/* Dropdown menu */}
                            <div id="dropdownAction" className="z-10 absolute hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">

                                <LocationList locations={locations}/>

                            
                            </div>
                        </div>
                        {/* Search */}
                        <label htmlFor="table-search" className="sr-only">Buscar</label>
                        <div className="relative mx-4">
                            <div className="absolute inset-y-0 rtl:inset-r-0 start-0 flex items-center justify-center w-8 cursor-pointer  rounded-l-lg bg-orange hover:bg-gray-800 ">
                                <svg className="w-4 h-4 text-gray-500 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                    <path stroke="currentColor" strokeLinecap="round" strokeLinejoin="round" strokeWidth="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                                </svg>
                            </div>
                            <input type="text" id="table-search-users" className="block pt-2 ps-10 text-sm text-gray-900 border  rounded-lg w-80 bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Buscar produtos" />
                        </div>
                        <div className='me-2'>
                            <ResponsiveNavLink
                                method="get"
                                className='text-white bg-orange hover:bg-yellow-500  hover:border-transparent dark:text-white font-medium rounded-full text-sm px-5 py-2.5 text-center me-2  '
                                href={route('productCreate')} type="button">
                                Adicionar
                            </ResponsiveNavLink>
                        </div>
                    </div>
                    <table className="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                        <thead className="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" className="px-16 py-3">
                                    <span className="sr-only">Imagem</span>
                                </th>
                                <th scope="col" className="px-6 py-3">Produto</th>
                                <th scope="col" className="px-6 py-3"> Quantidade</th>
                                <th scope="col" className="px-6 py-3">Preço</th>
                                <th scope="col" className="px-6 py-3">Açao</th>
                            </tr>
                        </thead>
                        <tbody>
                        {products.map((item, index) => (
                            <tr key={index} className="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                <td className="p-4">
                                    <img src={'http://localhost:8000/storage/'+item.images} className="w-16 md:w-32 max-w-full max-h-full" alt="Apple Watch" />
                                </td>
                                <td className="px-6 py-4 font-semibold text-gray-900 dark:text-white">
                                    {item.name}
                                </td>
                                <td className="px-6 py-4">
                                    <div className="flex items-center">
                                      
                                        <div>
                                            <span  id="first_product"  className="text-center bg-gray-50 w-14 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block px-2.5 py-1 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"  >
                                                {item.stock}
                                            </span>
                                        </div>
                                        
                                    </div>
                                </td>
                                <td className="px-6 py-4 font-semibold text-gray-900 dark:text-white">
                                    {item.price}
                                </td>
                                <td className="px-6 py-4">
                                    <ResponsiveNavLink
                                        method="get"
                                        href={route('productEdit', { id: item.code_product })} type="button" className="font-medium hove:--tw-text-white dark:text-orange dark:hove:text-white hover:bg-transparent   dark:hover:bg-transparent pe-0 py-0 ps-0 border-l-0">
                                        Editar
                                    </ResponsiveNavLink>
                                </td>
                            </tr>
                        ))}
                        </tbody>
                    </table>

                </div>
            </section>
        </AuthenticatedLayout>
    )
}



function LocationList({ locations }) {
    const [groupedLocations, setGroupedLocations] = useState([]);
    const [currentPage, setCurrentPage] = useState(1);

    useEffect(() => {
        // Função para agrupar os itens em grupos de 50
        const groupLocations = () => {
            const grouped = [];
            const chunkSize = 15;
            for (let i = 0; i < locations.length; i += chunkSize) {
                grouped.push(locations.slice(i, i + chunkSize));
            }
            return grouped;
        };

        // Agrupa os itens quando a lista de locations muda
        setGroupedLocations(groupLocations());
    }, [locations]);

    const loadNextPage = () => {
        // Carrega o próximo grupo de locations quando chega ao penúltimo item do grupo atual
        if (currentPage < groupedLocations.length) {
            setCurrentPage(currentPage + 1);
        }
    };

    return (
        <>
            <ul className='overflow-scroll py-1 text-sm text-gray-700 dark:text-gray-200 ' aria-labelledby="dropdownActionButton">
                {groupedLocations[currentPage - 1]?.map((element, index) => (
                    <li key={index}>
                        <a href="#" className="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                            {element.name}
                        </a>
                    </li>
                ))}
            </ul>
            {currentPage !== groupedLocations.length && (
                <div className="py-1">
                    <button onClick={loadNextPage} className="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">
                        Ver mais
                    </button>
                </div>
            )}
        </>
    );
}

