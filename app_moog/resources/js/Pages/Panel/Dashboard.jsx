import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout';
import { Head } from '@inertiajs/react';
import MapaBrasil from '@/Components/map';


export default function Dashboard({ auth, locations}) {
    
    return (
        <AuthenticatedLayout
            user={auth.user}
            header={<h2 className="font-semibold text-xl text-gray-800 leading-tight">Dashboard</h2>}
        >
            <Head title="Dashboard" />
        <section className='w-11/12 m-auto p-5 rounded-sm border'>
            <div className="px-4 sm:px-0 m-5">
                <h2 className="text-base font-semibold leading-7 text-gray-900 dark:text-white" >Dashboard</h2>
                <p className="mt-1 max-w-2xl text-sm leading-6 text-gray-500 dark:text-white">Informações e métricas</p>
            </div>
            <div className='w-auto	h-full m-5 p-5 flex items-center justify-center border-2  box-border' >
                <MapaBrasil locations={locations}/>
            </div>
           
        </section>
        </AuthenticatedLayout>
    );
}
