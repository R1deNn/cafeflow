<x-app-layout>
    <div class="relative bg-white overflow-hidden">
        <section class="lg:pt-20 pt-0  lg:pl-8 h-full">
            <div
                class="rounded-2xl bg-indigo-50 py-10 overflow-hidden m-5 lg:m-0 2xl:py-16 xl:py-8  lg:rounded-tl-2xl lg:rounded-bl-2xl ">
                <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                    <div class="grid grid-cols-1 gap-14 items-center lg:grid-cols-12 lg:gap32">
                        <div class="w-full xl:col-span-5 lg:col-span-6 2xl:-mx-5 xl:-mx-0">
                            <h1 class="py-4 text-center text-gray-900 font-bold font-manrope text-2xl lg:text-left leading-[70px]">
                                Умная аналитика
                            </h1>
                            <p class=" text-gray-500 text-lg text-center lg:text-left py-4">
                                Оптимизируйте работу вашего <livewire:pages.home-page-text /> с помощью прогнозирования загруженности и автоматических отчётов.
                            </p>
                            <div
                                class="relative p-1.5 my-10 flex items-center gap-y-4 h-auto md:h-16 flex-col md:flex-row justify-between rounded-full md:shadow-[0px 15px 30px -4px rgba(16, 24, 40, 0.03)] border border-transparent transition-all duration-500 hover:border-indigo-600 focus-within:border-indigo-600">
                                <input type="text" name="email" placeholder="Введите вашу почту"
                                       class="text-base rounded-full text-gray-900 flex-1 py-4 px-6 shadow-[0px 15px 30px -4px rgba(16, 24, 40, 0.03)] md:shadow-none bg-white md:bg-transparent shadow-none placeholder:text-gray-400 focus:outline-none md:w-fit w-full" />
                                <button
                                    class="ml-4 bg-blue-300 rounded-full py-3 px-7 text-base font-semibold text-white cursor-pointer transition-all duration-500 md:w-fit w-full">
                                    Отправить
                                </button>
                            </div>
                        </div>
                        <div class="w-full xl:col-span-7  lg:col-span-6 block mt-4">
                            <div class="w-full  sm:w-auto lg:w-[60.8125rem] xl:ml-16">
                                <img src="https://pagedone.io/asset/uploads/1694846193.png" alt="Dashboard image" class="rounded-l-3xl object-cover"
                                     class="w-full  lg:h-auto ">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- Возможности -->
    <section class="py-24">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="mb-14 text-center">
                <span
                    class="py-1 px-4 bg-indigo-100 rounded-full text-xs font-medium text-indigo-600 text-center">Возможности</span>
                <h2 class="text-4xl text-center font-bold text-gray-900 py-5">
                    Что умеет BusyBee?
                </h2>
            </div>
            <div
                class="flex justify-center items-center gap-x-5 gap-y-8 lg:gap-y-0 flex-wrap md:flex-wrap lg:flex-nowrap lg:flex-row lg:justify-between lg:gap-x-8">
                <div class="relative w-full text-center max-md:max-w-sm max-md:mx-auto group md:w-2/5 lg:w-1/4">
                    <div class="bg-indigo-50 rounded-lg flex justify-center items-center mb-5 w-20 h-20 mx-auto cursor-pointer transition-all duration-500 group-hover:bg-indigo-600">
                        <svg class="stroke-indigo-600 transition-all duration-500 group-hover:stroke-white" width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M10 27.5L15 25M15 25V21.25M15 25L20 27.5M8.75 14.375L12.5998 11.0064C13.1943 10.4862 14.1163 10.6411 14.5083 11.327L15.4917 13.048C15.8837 13.7339 16.8057 13.8888 17.4002 13.3686L21.25 10M2.5 2.5H27.5M26.25 2.5V13.25C26.25 17.0212 26.25 18.9069 25.0784 20.0784C23.9069 21.25 22.0212 21.25 18.25 21.25H11.75C7.97876 21.25 6.09315 21.25 4.92157 20.0784C3.75 18.9069 3.75 17.0212 3.75 13.25V2.5"
                                stroke="" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                    </div>
                    <h4 class="text-lg font-medium text-gray-900 mb-3 capitalize">
                        Анализ загруженности
                    </h4>
                    <p class="text-sm font-normal text-gray-500">
                        Прогнозируйте пиковые часы и оптимизируйте работу персонала.
                    </p>
                </div>
                <div class="relative w-full text-center max-md:max-w-sm max-md:mx-auto group md:w-2/5 lg:w-1/4">
                    <div class="bg-pink-50 rounded-lg flex justify-center items-center mb-5 w-20 h-20 mx-auto cursor-pointer transition-all duration-500 group-hover:bg-pink-600">
                        <svg class="stroke-pink-600 transition-all duration-500 group-hover:stroke-white" width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M2.5 7.5C2.5 4.73858 4.73858 2.5 7.5 2.5C10.2614 2.5 12.5 4.73858 12.5 7.5C12.5 10.2614 10.2614 12.5 7.5 12.5C4.73858 12.5 2.5 10.2614 2.5 7.5Z"
                                stroke="" stroke-width="2"></path>
                            <path
                                d="M2.5 22.5C2.5 20.143 2.5 18.9645 3.23223 18.2322C3.96447 17.5 5.14298 17.5 7.5 17.5C9.85702 17.5 11.0355 17.5 11.7678 18.2322C12.5 18.9645 12.5 20.143 12.5 22.5C12.5 24.857 12.5 26.0355 11.7678 26.7678C11.0355 27.5 9.85702 27.5 7.5 27.5C5.14298 27.5 3.96447 27.5 3.23223 26.7678C2.5 26.0355 2.5 24.857 2.5 22.5Z"
                                stroke="" stroke-width="2"></path>
                            <path
                                d="M17.5 7.5C17.5 5.14298 17.5 3.96447 18.2322 3.23223C18.9645 2.5 20.143 2.5 22.5 2.5C24.857 2.5 26.0355 2.5 26.7678 3.23223C27.5 3.96447 27.5 5.14298 27.5 7.5C27.5 9.85702 27.5 11.0355 26.7678 11.7678C26.0355 12.5 24.857 12.5 22.5 12.5C20.143 12.5 18.9645 12.5 18.2322 11.7678C17.5 11.0355 17.5 9.85702 17.5 7.5Z"
                                stroke="" stroke-width="2"></path>
                            <path
                                d="M17.5 22.5C17.5 19.7386 19.7386 17.5 22.5 17.5C25.2614 17.5 27.5 19.7386 27.5 22.5C27.5 25.2614 25.2614 27.5 22.5 27.5C19.7386 27.5 17.5 25.2614 17.5 22.5Z"
                                stroke="" stroke-width="2"></path>
                        </svg>
                    </div>
                    <h4 class="text-lg font-medium text-gray-900 mb-3 capitalize">
                        Управление финансами
                    </h4>
                    <p class="text-sm font-normal text-gray-500">
                        Контролируйте доходы и расходы с автоматическими отчётами.
                    </p>
                </div>
                <div class="relative w-full text-center max-md:max-w-sm max-md:mx-auto group md:w-2/5 lg:w-1/4">
                    <div class="bg-teal-50 rounded-lg flex justify-center items-center mb-5 w-20 h-20 mx-auto cursor-pointer transition-all duration-500 group-hover:bg-teal-600">
                        <svg class="stroke-teal-600 transition-all duration-500 group-hover:stroke-white" width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M3.75 26.25H26.25M6.25 22.875C4.86929 22.875 3.75 21.8676 3.75 20.625V12.75C3.75 11.5074 4.86929 10.5 6.25 10.5C7.63071 10.5 8.75 11.5074 8.75 12.75V20.625C8.75 21.8676 7.63071 22.875 6.25 22.875ZM15 22.875C13.6193 22.875 12.5 21.8676 12.5 20.625V9.375C12.5 8.13236 13.6193 7.125 15 7.125C16.3807 7.125 17.5 8.13236 17.5 9.375V20.625C17.5 21.8676 16.3807 22.875 15 22.875ZM23.75 22.875C22.3693 22.875 21.25 21.8676 21.25 20.625V6C21.25 4.75736 22.3693 3.75 23.75 3.75C25.1307 3.75 26.25 4.75736 26.25 6V20.625C26.25 21.8676 25.1307 22.875 23.75 22.875Z"
                                stroke="" stroke-width="2" stroke-linecap="round"></path>
                        </svg>
                    </div>
                    <h4 class="text-lg font-medium text-gray-900 mb-3 capitalize">
                        Мониторинг в реальном времени
                    </h4>
                    <p class="text-sm font-normal text-gray-500">
                        Следите за активностью через удобные дашборды.
                    </p>
                </div>
                <div class="relative w-full text-center max-md:max-w-sm max-md:mx-auto group md:w-2/5 lg:w-1/4">
                    <div class="bg-orange-50 rounded-lg flex justify-center items-center mb-5 w-20 h-20 mx-auto cursor-pointer transition-all duration-500 group-hover:bg-orange-600">
                        <svg class="stroke-orange-600 transition-all duration-500 group-hover:stroke-white" width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M15.4167 12.0833V21.25M5.41667 21.25V20.8333C5.41667 19.262 5.41667 18.4763 5.90482 17.9882C6.39298 17.5 7.17865 17.5 8.75 17.5H22.0833C23.6547 17.5 24.4404 17.5 24.9285 17.9882C25.4167 18.4763 25.4167 19.262 25.4167 20.8333V21.25M15.4167 9.16667C13.8453 9.16667 13.0596 9.16667 12.5715 8.67851C12.0833 8.19036 12.0833 7.40468 12.0833 5.83333C12.0833 4.26198 12.0833 3.47631 12.5715 2.98816C13.0596 2.5 13.8453 2.5 15.4167 2.5C16.988 2.5 17.7737 2.5 18.2618 2.98816C18.75 3.47631 18.75 4.26198 18.75 5.83333C18.75 7.40468 18.75 8.19036 18.2618 8.67851C17.7737 9.16667 16.988 9.16667 15.4167 9.16667ZM7.08333 25.8333C7.08333 26.7538 6.33714 27.5 5.41667 27.5C4.49619 27.5 3.75 26.7538 3.75 25.8333C3.75 24.9129 4.49619 24.1667 5.41667 24.1667C6.33714 24.1667 7.08333 24.9129 7.08333 25.8333ZM17.0833 25.8333C17.0833 26.7538 16.3371 27.5 15.4167 27.5C14.4962 27.5 13.75 26.7538 13.75 25.8333C13.75 24.9129 14.4962 24.1667 15.4167 24.1667C16.3371 24.1667 17.0833 24.9129 17.0833 25.8333ZM27.0833 25.8333C27.0833 26.7538 26.3371 27.5 25.4167 27.5C24.4962 27.5 23.75 26.7538 23.75 25.8333C23.75 24.9129 24.4962 24.1667 25.4167 24.1667C26.3371 24.1667 27.0833 24.9129 27.0833 25.8333Z"
                                stroke="" stroke-width="2" stroke-linecap="round"></path>
                        </svg>
                    </div>
                    <h4 class="text-lg font-medium text-gray-900 mb-3 capitalize">
                        Расширяемость
                    </h4>
                    <p class="text-sm font-normal text-gray-500">
                        Платформа расширяется вместе с вашим бизнесом
                    </p>
                </div>
            </div>
        </div>
    </section>

    <div id="demo" class="bg-white py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="lg:text-center">
                <h2 class="text-base text-yellow-500 font-semibold tracking-wide uppercase">Демо</h2>
                <p class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl">
                    Как это работает?
                </p>
            </div>
            <div class="mt-10 bg-gray-50 p-6 rounded-lg shadow-inner">
                <!-- Здесь можно вставить Livewire-компонент с графиком -->
                <div class="h-64 bg-white rounded-md flex items-center justify-center border border-gray-200">
                    <p class="text-gray-500">Здесь будет интерактивный график загруженности</p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
