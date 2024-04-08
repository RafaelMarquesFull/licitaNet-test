import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout';
import { Head, router, useForm } from '@inertiajs/react';
import { useState } from 'react';
import Products from './Products';

export default function EditProducts({auth, products, locations, brands, categories}) {
    const imagem = 'http://localhost:8000/storage/'+ products.images;
    console.log(imagem)
    const [selectedImage, setSelectedImage] = useState(imagem);
    const {id} = auth.user
    console.log(products)
    const { data, setData } = useForm({
        code_product: products.code_product,
        name: products.name,
        price: products.price,
        description:products.description,
        stock:products.stock,
        code_city:products.code_city,
        code_brand:products.code_brand,
        code_category:products.code_category,
        user_id:id,
        slug:products.slug,
        images:products.images
    })
    function submit(e) {
        try {
            console.log(data)
            e.preventDefault()
            router.put('/products/update',data)
            
        } catch (error) {
            console.log(error)
        }
    }

    const handleImageChange = (event) => {
        const imageFile = event.target.files[0];
        setData('images', imageFile)
        if (imageFile) {
          const reader = new FileReader();
          reader.onload = () => {
            setSelectedImage(reader.result);
          };
          reader.readAsDataURL(imageFile);
        }
      };

    return (
        <AuthenticatedLayout
            user={auth.user}
            header={<h2 className="font-semibold text-xl text-gray-800  leading-tight dark:text-white">Adicionar produtos</h2>}
        >
            <Head title="Adicionar produtos" />

            <form onSubmit={submit}  className='w-11/12 m-auto p-5 rounded-sm border'>
                <div className="px-4 sm:px-0 m-5">
                    <h2 className="text-base font-semibold leading-7 text-gray-900 dark:text-white" >Informaçoes do produto</h2>
                    <p className="mt-1 max-w-2xl text-sm leading-6 text-gray-500 dark:text-white">Preencha todas as informações</p>
                </div>
                <div className="flex items-center justify-center w-9/12 m-auto ">
                    <label htmlFor="dropzone-file" className="flex flex-col items-center justify-center w-full h-auto  border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-bray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
                        {selectedImage ? (
                        <img src={selectedImage} alt="Selected" className="w-auto h-auto object-contain rounded-lg" />
                        ) : (
                        <div className="flex flex-col items-center justify-center pt-5 pb-6">
                            <svg className="w-8 h-8 mb-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                            <path stroke="currentColor" strokeLinecap="round" strokeLinejoin="round" strokeWidth="2" d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2"/>
                            </svg>
                            <p className="mb-2 text-sm text-gray-500 dark:text-gray-400"><span className="font-semibold">Click para fazer upload</span> ou arraste a imagem</p>
                            <p className="text-xs text-gray-500 dark:text-gray-400">SVG, PNG, JPG or GIF (MAX. 800x400px)</p>
                        </div>
                        )}
                        <input id="dropzone-file" type="file" className="hidden" onChange={handleImageChange} />
                    </label>
                </div>
                <div>

                </div>
                
                <div className='m-5 borde-2 border-indigo-500/50 p-3'>
                    
                   
                    <div className="mt-6 border-t border-gray-100 ">
                        <dl className="divide-y divide-gray-100">
                        <div className="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                            <dt className="text-sm font-medium leading-6 text-gray-900 dark:text-white ">Nome</dt>
                            <dd className="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">
                                <input required className="block py-2.5 px-0 w-auto text-sm text-gray-500  bg-transparent border-0 border-b-2 border-gray-200 appearance-none dark:text-white dark:border-gray-700 focus:outline-none focus:ring-0 focus:border-gray-200 peer"
                                    type='text'
                                    name='name'
                                    value={data.name}
                                    placeholder='Tenis'
                                    onChange={(e) => {
                                        setData('name', e.target.value)
                                    }}
                                />
                            </dd>
                        </div>
                        
                        <div className="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                            <dt className="text-sm font-medium leading-6 text-gray-900 dark:text-white">Preço</dt>
                            <dd className="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">
                                <input required className=" block py-2.5 px-0 w-auto text-sm text-gray-500 bg-transparent border-0 border-b-2 border-gray-200 appearance-none dark:text-white dark:border-gray-700 focus:outline-none focus:ring-0 focus:border-gray-200 peer"
                                    type='text'
                                    name='price'
                                    value={data.price}
                                    placeholder='R$ 10,00'
                                    onChange={e => setData('price', e.target.value)}
                                />
                            </dd>
                        </div>
                        
                        <div className="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                            <dt className="text-sm font-medium leading-6 text-gray-900 dark:text-white">Quantidade</dt>
                            <dd className="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">

                                    <div className="relative flex items-center max-w-[8rem]">
                                        <button type="button" id="decrement-button" data-input-counter-decrement="quantity-input" className="bg-gray-100 dark:bg-gray-700 dark:hover:bg-gray-600 dark:border-gray-600 hover:bg-gray-200 border border-gray-300 rounded-s-lg p-3 h-11 focus:ring-gray-100 dark:focus:ring-gray-700 focus:ring-2 focus:outline-none">
                                            <svg className="w-3 h-3 text-gray-900 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 2">
                                                <path stroke="currentColor" strokeLinecap="round" strokeLinejoin="round" strokeWidth="2" d="M1 1h16"/>
                                            </svg>
                                        </button>
                                        <input type="text" id="quantity-input" data-input-counter aria-describedby="helper-text-explanation" className="bg-gray-50 border-x-0 border-gray-300 h-11 text-center text-gray-900 text-sm focus:ring-blue-500 focus:border-blue-500 block w-full py-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="01" required 
                                            name='stock'
                                            value={data.stock}
                                            onChange={e => setData('stock', e.target.value)}
                                        />
                                        <button type="button" id="increment-button" data-input-counter-increment="quantity-input" className="bg-gray-100 dark:bg-gray-700 dark:hover:bg-gray-600 dark:border-gray-600 hover:bg-gray-200 border border-gray-300 rounded-e-lg p-3 h-11 focus:ring-gray-100 dark:focus:ring-gray-700 focus:ring-2 focus:outline-none">
                                            <svg className="w-3 h-3 text-gray-900 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                                                <path stroke="currentColor" strokeLinecap="round" strokeLinejoin="round" strokeWidth="2" d="M9 1v16M1 9h16"/>
                                            </svg>
                                        </button>
                                    </div>
                                    <p id="helper-text-explanation" className="mt-2 text-sm text-gray-500 dark:text-gray-400">Insira a quantidade</p>
                            </dd>
                        </div>
                           
                        <div className="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                            <dt className="text-sm font-medium leading-6 text-gray-900 dark:text-white">Localização</dt>
                            <dd className="mt-1 w-full text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0 sm:gap-4">
                            <label for="underline_select" className="sr-only">Underline select</label>
                            <select defaultValue={data.code_city} onChange={e => setData('code_city', e.target.value)} id="underline_select" className="block py-2.5 px-0 w-auto text-sm text-gray-500 bg-transparent border-0 border-b-2 border-gray-200 appearance-none dark:text-white dark:border-gray-700 focus:outline-none focus:ring-0 focus:border-gray-200 peer">
                                <option selected  value={-1}  className='dark:text-gray-700'>Localização</option>
                                {locations.map((element, index) => (
                                    <option key={index} value={element.code_city}>
                                            {element.name}
                                    </option>
                                ))}
                            </select>
                            </dd>
                        </div>
                        <div className="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                            <dt className="text-sm font-medium leading-6 text-gray-900 dark:text-white">Categoria</dt>
                            <dd className="mt-1 w-full text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0 sm:gap-4">
                            <label for="underline_select" className="sr-only">Underline select</label>
                            <select  defaultValue={data.code_category} onChange={e => setData('code_category', e.target.value)} id="underline_select" className="block py-2.5 px-0 w-auto text-sm text-gray-500 bg-transparent border-0 border-b-2 border-gray-200 appearance-none dark:text-white dark:border-gray-700 focus:outline-none focus:ring-0 focus:border-gray-200 peer">
                                <option selected value={-1} className='dark:text-gray-700'>Categorias</option>
                                {categories.map((element, index) => (
                                    <option key={index} value={element.code_category}>
                                        {element.name}
                                    </option>
                                ))}
                            </select>
                            </dd>
                        </div>
                        <div className="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                            <dt className="text-sm font-medium leading-6 text-gray-900 dark:text-white">Marcas</dt>
                            <dd className="mt-1 w-full text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0 sm:gap-4">
                            <label for="underline_select" className="sr-only">Underline select</label>
                            <select  defaultValue={data.code_brand}  onChange={e => setData('code_brand', e.target.value)} id="underline_select" className="block py-2.5 px-0 w-auto text-sm text-gray-500 bg-transparent border-0 border-b-2 border-gray-200 appearance-none dark:text-white dark:border-gray-700 focus:outline-none focus:ring-0 focus:border-gray-200 peer">
                                <option selected value={-1} className='dark:text-gray-700'>Marcas</option>
                                {brands.map((element, index) => (
                                    <option key={index} value={element.code_brand}>
                                        {element.name}
                                    </option>
                                ))}
                            </select>
                            </dd>
                        </div>
                        <div className="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                            <dt className="text-sm font-medium leading-6 text-gray-900 dark:text-white">Descrição</dt>
                            <dd className="mt-1 w-full text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0 sm:gap-4">
                               <textarea className='border-none w-10/12 bg-gray-100 dark:text-white dark:bg-gray-400'
                                    name='description'
                                    onChange={e => setData('description', e.target.value)}
                                    defaultValue={data.description}
                                >
                               </textarea>
                            </dd>
                        </div>
                        
                        </dl>
                    </div>
                </div>
                <div className="flex flex-wrap gap-2">
                    <button type='submit'  className="px-20 m-auto py-2 bg-blue-500 text-white rounded hover:bg-blue-600 cursor-pointer">
                        Salvar
                    </button>
                </div>
            </form>
        </AuthenticatedLayout>
    );
}

