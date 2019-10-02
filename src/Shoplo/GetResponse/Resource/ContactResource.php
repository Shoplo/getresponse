<?php

namespace Shoplo\GetResponse\Resource;

use Shoplo\GetResponse\GetResponseClient;
use Shoplo\GetResponse\Model\Contact\Request\ContactRequest;

class ContactResource
{
    /** @var GetResponseClient */
    private $getResponseClient;

    /**
     * CampaignResource constructor.
     * @param GetResponseClient $GetResponseClient
     */
    public function __construct(GetResponseClient $GetResponseClient)
    {
        $this->getResponseClient = $GetResponseClient;
    }

    private function getContactsUrl($id = null)
    {
        if (null !== $id) {
            return sprintf('contacts/%s', $id);
        }
        return 'contacts';
    }

    public function createContact(ContactRequest $request)
    {
        return $this->getResponseClient->post(
            $this->getContactsUrl(),
            $request
        );
    }

    public function updateContact($id, ContactRequest $request)
    {
        return $this->getResponseClient->post(
            $this->getContactsUrl($id),
            $request
        );
    }

    public function deleteContact($id)
    {
        return $this->getResponseClient->delete(
            $this->getContactsUrl($id)
        );
    }
}
